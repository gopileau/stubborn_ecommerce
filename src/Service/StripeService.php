<?php

namespace App\Service;

use Stripe\Stripe;
use Stripe\PaymentIntent;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class StripeService
{
    private $stripeSecretKey;
    private $appUrl;

    public function __construct(ParameterBagInterface $params)
    {
        $this->stripeSecretKey = $params->get('STRIPE_SECRET_KEY'); // Retrieve from environment variables



        $this->appUrl = $params->get('APP_URL');

    }

    public function createPaymentIntent(array $data): PaymentIntent
    {
        // Debugging statement to log the retrieved Stripe secret key
        error_log("Stripe Secret Key: " . $this->stripeSecretKey); // Log the key being used
        error_log("Using Stripe API Key: " . $this->stripeSecretKey); // Additional log for clarity
        error_log("Current Environment: " . getenv('APP_ENV')); // Log the current environment

        error_log("Current Environment: " . getenv('APP_ENV')); // Log the current environment



        Stripe::setApiKey($this->stripeSecretKey);


        return PaymentIntent::create([
            'amount' => $data['amount'],
            'currency' => 'usd',
            'payment_method_types' => ['card'],
            'metadata' => [
                'integration_check' => 'accept_a_payment',
            ],
        ]);
    }
}
