<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Category; // Assurez-vous que Category est importé
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class ProductController extends AbstractController
{
    private $entityManager;
    private $productRepository;
    private $logger;

    public function __construct(EntityManagerInterface $entityManager, ProductRepository $productRepository, LoggerInterface $logger)
    {
        $this->entityManager = $entityManager;
        $this->productRepository = $productRepository;
        $this->logger = $logger;
    }

    /**
     * @Route("/products", name="app_products")
     * @Route("/boutique", name="app_boutique")
     */
    public function index(Request $request): Response
    {
        $minPrice = $request->query->get('min_price', 0);
        $maxPrice = $request->query->get('max_price', PHP_INT_MAX);
        $products = $this->productRepository->findByPriceRange($minPrice, $maxPrice);
        if (empty($products)) {
            $this->logger->warning('No products found for the given price range.');
        }

        $this->logger->info('Number of products found: ' . count($products) . ' for price range: ' . $minPrice . ' - ' . $maxPrice);

        $categories = $this->entityManager->getRepository(Category::class)->findAll();
        $this->logger->info('Selected price option: ' . $selectedPriceRange);

        return $this->render('product/index.html.twig', [
            'products' => $products,
            'categories' => $categories,
            'price' => $selectedPriceRange,
        ]);
    }

    #[Route("/admin/product/create", name: "app_product_create", methods: ["GET", "POST"])]
    public function create(Request $request): Response
    {
        // Logic to create a new product
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($product);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_products');
        } else {
            $this->logger->error('Product creation failed due to validation errors.');
        }

        return $this->render('product/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    #[Route("/admin/product/edit/{id}", name: "app_product_edit", methods: ["GET", "POST"])]
    public function edit(int $id, Request $request): Response
    {
        // Logic to edit an existing product
        $product = $this->productRepository->find($id);
        if (!$product) {
            throw $this->createNotFoundException('Produit non trouvé');
        }

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('app_products');
        } else {
            $this->logger->error('Product editing failed due to validation errors.');
        }

        return $this->render('product/edit.html.twig', [
            'form' => $form->createView(),
            'product' => $product,
        ]);
    }

    #[Route("/admin/product/delete/{id}", name: "app_product_delete", methods: ["POST"])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(int $id): Response
    {
        // Logic to delete a product
        $product = $this->productRepository->find($id);
        if (!$product) {
            throw $this->createNotFoundException('Produit non trouvé');
        }

        $this->entityManager->remove($product);
        $this->entityManager->flush();

        return $this->redirectToRoute('app_products');
    }

    /**
     * @Route("/produit/{id}", name="app_product_show", requirements={"id"="\d+"})
     * Displays the details of a specific product.
     */
    public function show(int $id): Response
    {
        $product = $this->productRepository->find($id);
        // Check if the product exists

        if (!$product) {
            throw $this->createNotFoundException('Produit non trouvé');
        }
        // Render the product details view

        return $this->render('product/unproduit.html.twig', [ 
            // Pass the product to the view
            'product' => $product
        ]);
    }

    #[Route("/cart/add/{id}", name: "app_add_to_cart", methods: ["POST"])]
    public function addToCart(int $id, Request $request): Response
    {
        $size = $request->request->get('sizeSelect'); // Assurez-vous que le nom correspond à celui du formulaire
        $this->logger->info('Adding product to cart', ['productId' => $id, 'size' => $size]);

        $product = $this->productRepository->find($id);
        if (!$product) {
            $this->logger->error('Produit introuvable', ['productId' => $id]);
            return $this->redirectToRoute('app_products');
        }

        $session = $request->getSession();
        if (!$session->isStarted()) {
            $session->start();
        }

        // Ajout ou mise à jour du panier
        $cart = $session->get('cart', []);
        if (!isset($cart[$id])) {
            $cart[$id] = [
                'product' => [
                    'id' => $product->getId(),
                    'name' => $product->getName(),
                    'price' => $product->getPrice(),
                    'image' => $product->getImage() ?: 'images/default-image.jpg',
                ],
                'quantity' => 1,
                'size' => $size,
            ];
        } else {
            $cart[$id]['quantity'] += 1;
        }

        $session->set('cart', $cart);
        $this->logger->info('Panier mis à jour', ['cart' => $cart]);

        return $this->redirectToRoute('app_cart'); // Redirige vers la page du panier
    }
}
