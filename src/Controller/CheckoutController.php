<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\StripeService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Stripe\Stripe;
use Stripe\Checkout\Session as CheckoutSession;

final class CheckoutController extends AbstractController
{
    #[Route('/checkout', name: 'app_checkout', methods: ['GET', 'POST'])]
    public function checkout(Request $request, StripeService $stripeService, LoggerInterface $logger): Response
    {
        // Configure Stripe's secret key for the backend
        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']); // Assurez-vous d'utiliser la clé secrète de Stripe dans votre fichier .env

        // Prepare the Stripe public key for the frontend
        $stripePublicKey = $_ENV['STRIPE_PUBLIC_KEY']; // Utilisez la clé publique pour le frontend

        // Handle the checkout logic, such as processing payment and clearing the cart.
        if (!$this->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('app_login'); // Redirect to login if user is not authenticated
        }

        $session = $request->getSession();
        $cart = $session->get('cart', []);
        
        if (empty($cart)) {
            $this->logger->warning('Checkout attempted with an empty cart.');
            return $this->redirectToRoute('app_products'); // Redirect to products if cart is empty
        }

        // Calculate total amount for the cart
        $totalAmount = $this->calculateTotalAmount($cart);
        
        // Validate total amount
        if ($totalAmount < 50) {
            return $this->render('checkout/success.html.twig', [
                'message' => 'The amount must be at least 50 cents.',
            ]);
        }

        // Create a Stripe Checkout session
        try {
            // Create a checkout session for Stripe
            $checkoutSession = CheckoutSession::create([
                'payment_method_types' => ['card'],
                'line_items' => $this->getLineItems($cart), // Pass the line items based on the cart contents
                'mode' => 'payment',
                'success_url' => $this->generateUrl('app_checkout_success', [], 0), // Success URL after payment
                'cancel_url' => $this->generateUrl('app_checkout_cancel', [], 0), // Cancel URL if payment is canceled
            ]);
        } catch (\Exception $e) {
            $logger->error('Payment failed: ' . $e->getMessage());
            return $this->render('checkout/success.html.twig', [
                'message' => 'Payment processing failed. Please try again.',
            ]);
        }

        // Redirect to Stripe Checkout page
        return $this->redirect($checkoutSession->url);
    }

    private function calculateTotalAmount(array $cart): int
    {
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['product']['price'] * $item['quantity'];
        }
        return $total * 100; // Convert total to cents
    }

    private function getLineItems(array $cart): array
    {
        $lineItems = [];
        foreach ($cart as $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $item['product']['name'],
                    ],
                    'unit_amount' => $item['product']['price'] * 100, // Price in cents
                ],
                'quantity' => $item['quantity'],
            ];
        }
        return $lineItems;
    }

    #[Route('/checkout/success', name: 'app_checkout_success')]
    public function checkoutSuccess(): Response
    {
        // Clear the cart after successful checkout
        $session = $this->get('session');
        $session->remove('cart');
        
        return $this->render('checkout/success.html.twig', [
            'message' => 'Checkout successful! Thank you for your purchase.',
        ]);
    }

    #[Route('/checkout/cancel', name: 'app_checkout_cancel')]
    public function checkoutCancel(): Response
    {
        return $this->render('checkout/cancel.html.twig', [
            'message' => 'Payment was canceled. Please try again.',
        ]);
    }
}
