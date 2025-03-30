<?php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\EqualTo;
use App\Validator\PasswordMatch; // Ajoutez cette ligne en haut de votre fichier

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Nom utilisateur',
                'attr' => ['placeholder' => 'johndoe']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse mail',
                'attr' => ['placeholder' => 'johndoe@gmail.com']
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse de livraison',
                'required' => false,
                'attr' => ['placeholder' => '8 rue du bac 54100 Nancy']
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'attr' => ['placeholder' => '********']
            ])
            ->add('confirm_password', PasswordType::class, [
                'constraints' => [
                    new NotBlank(),
                    new PasswordMatch(), // Utilisez le validateur personnalisé
                ],
                'mapped' => false,
                'label' => 'Confirmer le mot de passe',
                'attr' => ['placeholder' => '********']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}