<?php
namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class PasswordMatchValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        $form = $this->context->getRoot();
        $password = $form->get('password')->getData();
        $confirmPassword = $value;

        if ($password !== $confirmPassword) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}
