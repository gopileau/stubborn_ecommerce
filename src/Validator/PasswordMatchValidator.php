<?php
namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class PasswordMatchValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof PasswordMatch) {
            throw new UnexpectedTypeException($constraint, PasswordMatch::class);
        }

        // Récupérer les données du formulaire
        $formData = $this->context->getRoot()->getData(); // Récupérer l'objet User

        // Vérifiez si le mot de passe correspond
        if ($formData->getPassword() !== $value) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}