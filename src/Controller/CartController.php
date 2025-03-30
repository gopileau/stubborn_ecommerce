<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use App\Repository\ProductRepository;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

final class CartController extends AbstractController
{
    private CsrfTokenManagerInterface $csrfTokenManager;
    private LoggerInterface $logger;
    private ProductRepository $productRepository;

    public function __construct(CsrfTokenManagerInterface $csrfTokenManager, LoggerInterface $logger, ProductRepository $productRepository)
    {
        $this->csrfTokenManager = $csrfTokenManager;
        $this->logger = $logger;
        $this->productRepository = $productRepository;
    }

    #[Route('/cart', name: 'app_cart', methods: ['GET'])]
    public function viewCart(Request $request): Response
    {
        $session = $request->getSession();
        if (!$session->isStarted()) {
            $session->start();
        }

        $cart = $session->get('cart', []);
        $this->logger->info('Cart contents retrieved', ['cart' => $cart]);

        $cartItems = [];
        $totalPrice = 0;

        foreach ($cart as $id => $data) {
            if (!isset($data['product']['id'], $data['quantity'])) {
                $this->logger->warning('Invalid cart item structure', ['cart_item' => $data]);
                continue;
            }
            
            $product = $this->productRepository->find($data['product']['id']);
            if ($product) {
                $cartItems[$id] = [
                    'product' => $product,
                    'quantity' => $data['quantity'],
                    'size' => $data['size'] ?? 'default_size',
                ];
                $totalPrice += $product->getPrice() * $data['quantity'];
            } else {
                $this->logger->error('Product not found in cart', ['product_id' => $id]);
            }
        }

        return $this->render('cart/index.html.twig', [
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
        ]);
    }

    #[Route('/cart/remove/{id}', name: 'app_remove_from_cart', methods: ['POST'])]
    public function removeFromCart(int $id, Request $request): Response
    {
        $session = $request->getSession();
        $cart = $session->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            $session->set('cart', $cart);
            $this->logger->info('Product removed from cart', ['product_id' => $id]);
        } else {
            $this->logger->warning('Attempt to remove a non-existent product', ['product_id' => $id]);
        }

        return $this->redirectToRoute('app_cart');
    }

    #[Route('/cart/add/{id}', name: 'app_cart_add', methods: ['POST'])]
    public function addToCart(int $id, Request $request): Response
    {
        $session = $request->getSession();
        $cart = $session->get('cart', []);

        $quantity = max(1, intval($request->request->get('quantity', 1))); // Ensure quantity is a positive integer
        $product = $this->productRepository->find($id);

        if (!$product) {
            $this->logger->error('Product not found', ['product_id' => $id]);
            return $this->redirectToRoute('app_cart');
        }

        $size = $request->request->get('selectedSize', 'default_size');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
            $this->logger->info('Updated product quantity in cart', [
                'product_id' => $id,
                'new_quantity' => $cart[$id]['quantity'],
            ]);
        } else {
            $cart[$id] = [
                'product' => [
                    'id' => $product->getId(),
                    'name' => $product->getName(),
                    'price' => $product->getPrice(),
                ],
                'size' => $size,
                'quantity' => $quantity,
            ];
            $this->logger->info('Product added to cart', ['product_id' => $id, 'quantity' => $quantity]);
        }

        $session->set('cart', $cart);
        return $this->redirectToRoute('app_cart');
    }
}
