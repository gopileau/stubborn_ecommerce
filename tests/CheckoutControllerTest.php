<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CheckoutControllerTest extends WebTestCase
{
    public function testCheckoutSuccess()
    {
        // Simulate a successful checkout process
        $client = static::createClient();
        $crawler = $client->request('GET', '/checkout');
        
        // Add assertions to verify successful checkout
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Checkout successful! Thank you for your purchase.');
    }

    public function testCheckoutPaymentFailure()
    {
        // Simulate a payment failure scenario
        $client = static::createClient();
        $crawler = $client->request('POST', '/checkout', [
            // Add necessary parameters to simulate payment failure
        ]);
        
        // Add assertions to verify payment failure handling
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Payment processing failed. Please try again.');
    }

    public function testCheckoutMinimumAmount()
    {
        // Simulate a checkout with an amount below the minimum
        $client = static::createClient();
        $crawler = $client->request('POST', '/checkout', [
            // Add necessary parameters to simulate minimum amount validation
        ]);
        
        // Add assertions to verify minimum amount validation
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'The amount must be at least 50 cents.');
    }

    public function testCheckoutWithEmptyCart()
    {
        // Simulate an empty cart
        $client = static::createClient();
        $client->request('POST', '/checkout');

        $this->assertResponseRedirects('/cart');
    }

    public function testCheckoutWithValidCart()
    {
        // Simulate a valid cart
        $client = static::createClient();
        $client->getContainer()->get('session')->set('cart', [
            1 => ['product' => ['id' => 1, 'price' => 10], 'quantity' => 1],
        ]);
        $client->request('POST', '/checkout');

        $this->assertResponseIsSuccessful();
    }

    public function testCheckoutWithTotalLessThanOne()
    {
        // Simulate a cart with total less than 1
        $client = static::createClient();
        $client->getContainer()->get('session')->set('cart', [
            1 => ['product' => ['id' => 1, 'price' => 1], 'quantity' => 1],

        ]);
        $client->request('POST', '/checkout');

        $this->assertResponseStatusCodeSame(400);
        $this->assertJsonContains(['error' => 'Total amount must be greater than or equal to 1.']);
    }
}
