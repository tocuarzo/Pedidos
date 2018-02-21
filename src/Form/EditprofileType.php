<?php

namespace App\Form;

use App\Entity\Editprofile;
use App\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditprofileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("username", TextType::class, array("required" => false))
            ->add("password", PasswordType::class, array("required" => false))
            ->add("password2", PasswordType::class, array("required" => false))
            ->add("password3",PasswordType::class,  array("mapped" => false))
            ->add("avatar", FileType::class, array("required" => false))
            ->add("modificar", SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            'data_class' => Usuario::class,
        ]);
    }
}
