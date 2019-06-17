<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class TarjetaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titular', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                )
            )) 

            ->add('marca', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                )
            ))

            ->add('numero', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                )
            ))
            
            ->add('codigo', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                )
            ))

            ->add('fechaVto', DateType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Tarjeta'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_tarjeta';
    }


}
