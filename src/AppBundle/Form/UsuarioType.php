<?php

namespace AppBundle\Form;

use AppBundle\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UsuarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', TextType::class, array(
            'attr' => array(
                'class' => 'form-control'
            )
        ))
        ->add('plainPassword', TextType::class, array( 
            'mapped' => false,
            'attr' => array(
                'class' => 'form-control'
            )
        ))
        ->add('nombre',null, array(
            'attr' => array(
                'class' => 'form-control'
            )
        ))
        ->add('apellido',null, array(
            'attr' => array(
                'class' => 'form-control'
            )
        ))
        ->add('fechaNacimiento',null, array(
            'attr' => array(
                'class' => 'form-control'
            )
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usuario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_usuario';
    }


}
