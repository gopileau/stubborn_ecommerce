<?php

namespace App\Security\Exception;

use Symfony\Component\Security\Core\Exception\AuthenticationException;

class UserNotFoundException extends AuthenticationException
{
    public function getMessageKey(): string
    {
        return 'Invalid credentials.';
    }
}
