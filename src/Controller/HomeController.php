<?php
// src/Controller/HomeController.php
namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class HomeController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $featuredProducts = $this->entityManager->getRepository(Product::class)->findBy(['featured' => 1]);

        return $this->render('home/index.html.twig', [
            'featuredProducts' => $featuredProducts,
            'isLoggedIn' => $this->isGranted('IS_AUTHENTICATED_FULLY'),
        ]);
    }

    #[Route('/boutique', name: 'app_boutique')]
    public function boutique(): Response
    {
        $products = $this->entityManager->getRepository(Product::class)->findAll();

        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }
    #[Route('/product/{id}', name: 'product_show', requirements: ['id' => '\d+'])]
public function show(Product $product): Response
{
    return $this->render('product/show.html.twig', [
        'product' => $product,
    ]);
}


    #[Route('/home_connected', name: 'app_home_connected')]
    public function homeConnected(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

        $featuredProducts = $this->entityManager->getRepository(Product::class)->findBy(['featured' => 1]);

        // Debugging information
        $this->addFlash('debug', 'Current user: ' . $this->getUser()->getUsername());
        $this->addFlash('debug', 'Featured products: ' . json_encode($featuredProducts));

        return $this->render('home/home_connected.html.twig', [
            'isLoggedIn' => true,
            'featuredProducts' => $featuredProducts,
        ]);
    }
}

