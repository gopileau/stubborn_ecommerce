<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CheckoutControllerTest extends WebTestCase
{
    public function testCheckoutSuccess()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/checkout');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Checkout');
    }

    public function testCheckoutWithEmptyCart()
    {
        $client = static::createClient();
        $client->request('GET', '/checkout');

        $this->assertResponseRedirects('/products');
    }

    public function testCheckoutRedirectsToLoginForUnauthenticatedUser()
    {
        $client = static::createClient();
        $client->request('GET', '/checkout');

        $this->assertResponseRedirects('/login');
    }

    public function testCheckoutSuccessRedirectsToSuccessPage()
    {
        $client = static::createClient();
        $client->loginUser($this->createUser()); // Assuming createUser() is a method to create a test user
        $client->request('POST', '/checkout', [
            'cart' => [
                // Add test cart data here
            ]
        ]);

        $this->assertResponseRedirects('/checkout/success');
    }
}
