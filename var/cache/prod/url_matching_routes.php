<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login_check', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/checkout/cancel' => [
            [['_route' => 'checkout_cancel', '_controller' => 'App\\Controller\\CheckoutController::checkoutCancel'], null, null, null, false, false, null],
            [['_route' => 'app_checkout_cancel', '_controller' => 'App\\Controller\\CheckoutController::checkoutCancel'], null, null, null, false, false, null],
        ],
        '/products' => [[['_route' => 'app_products', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::viewCart'], null, ['GET' => 0], null, false, false, null]],
        '/checkout' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\CheckoutController::checkout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/checkout/success' => [[['_route' => 'app_checkout_success', '_controller' => 'App\\Controller\\CheckoutController::checkoutSuccess'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'security_home', '_controller' => 'App\\Controller\\MainController::homepage'], null, null, null, false, false, null],
        ],
        '/boutique' => [[['_route' => 'app_boutique', '_controller' => 'App\\Controller\\HomeController::boutique'], null, null, null, false, false, null]],
        '/home_connected' => [[['_route' => 'app_home_connected', '_controller' => 'App\\Controller\\HomeController::homeConnected'], null, null, null, false, false, null]],
        '/admin/product/create' => [[['_route' => 'app_product_create', '_controller' => 'App\\Controller\\ProductController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/stripe/checkout' => [[['_route' => 'stripe_checkout', '_controller' => 'App\\Controller\\CheckoutController::checkout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/produ(?'
                    .'|it/([^/]++)(*:27)'
                    .'|ct(?'
                        .'|/(\\d+)(*:45)'
                        .'|s/([^/]++)(*:62)'
                    .')'
                .')'
                .'|/reset\\-password/([^/]++)(*:96)'
                .'|/cart/(?'
                    .'|remove/([^/]++)(*:127)'
                    .'|add/([^/]++)(?'
                        .'|(*:150)'
                    .')'
                .')'
                .'|/admin/product/(?'
                    .'|edit/([^/]++)(*:191)'
                    .'|delete/([^/]++)(*:214)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null]],
        45 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null]],
        62 => [[['_route' => 'app_product_show_by_id', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        96 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        127 => [[['_route' => 'app_remove_from_cart', '_controller' => 'App\\Controller\\CartController::removeFromCart'], ['id'], ['POST' => 0], null, false, true, null]],
        150 => [
            [['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::addToCart'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_add_to_cart', '_controller' => 'App\\Controller\\ProductController::addToCart'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        191 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        214 => [
            [['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
