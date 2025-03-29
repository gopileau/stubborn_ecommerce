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
        // Récupérer les produits en avant sans doublons (par nom ou ID)
        $featuredProducts = $this->entityManager->getRepository(Product::class)->findBy(
            ['featured' => 1], // Filtrer uniquement les produits en avant
            ['name' => 'ASC']   // Optionnel : trier les produits par nom
        );

        // Utiliser array_unique() pour supprimer les doublons par nom
        $uniqueFeaturedProducts = [];
        $productNames = [];

        foreach ($featuredProducts as $product) {
            // Si le nom du produit n'est pas encore dans le tableau des noms, on l'ajoute
            if (!in_array($product->getName(), $productNames)) {
                $uniqueFeaturedProducts[] = $product;
                $productNames[] = $product->getName();
            }
        }

        return $this->render('home/index.html.twig', [
            'featuredProducts' => $uniqueFeaturedProducts,
            'isLoggedIn' => $this->isGranted('IS_AUTHENTICATED_FULLY'),
        ]);
    }

    #[Route('/boutique', name: 'app_boutique')]
    public function boutique(): Response
    {
        // Récupérer tous les produits
        $products = $this->entityManager->getRepository(Product::class)->findBy([], ['name' => 'ASC']);

        // Supprimer les doublons (par nom)
        $uniqueProducts = [];
        $productNames = [];

        foreach ($products as $product) {
            if (!in_array($product->getName(), $productNames)) {
                $uniqueProducts[] = $product;
                $productNames[] = $product->getName();
            }
        }

        return $this->render('product/index.html.twig', [
            'products' => $uniqueProducts,
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

        // Récupérer les produits en avant sans doublons
        $featuredProducts = $this->entityManager->getRepository(Product::class)->findBy(
            ['featured' => 1], // Filtrer uniquement les produits en avant
            ['name' => 'ASC']   // Optionnel : trier les produits par nom
        );

        // Supprimer les doublons (par nom)
        $uniqueFeaturedProducts = [];
        $productNames = [];

        foreach ($featuredProducts as $product) {
            if (!in_array($product->getName(), $productNames)) {
                $uniqueFeaturedProducts[] = $product;
                $productNames[] = $product->getName();
            }
        }

        // Debugging information
        $this->addFlash('debug', 'Current user: ' . $this->getUser()->getUsername());
        $this->addFlash('debug', 'Featured products: ' . json_encode($uniqueFeaturedProducts));

        return $this->render('home/home_connected.html.twig', [
            'isLoggedIn' => true,
            'featuredProducts' => $uniqueFeaturedProducts,
        ]);
    }
}
