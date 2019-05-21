<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PropiedadType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo', TextType::class, array(
                'required' => true,
                'attr' => array(
                   'class' => 'form-control',
                   'autocomplete' => 'off',
                ),
                'label'=> 'Título'
            ))

            ->add('descripcion', TextType::class, array(
                'required' => true,
                'attr' => array(
                   'class' => 'form-control',
                   'autocomplete' => 'off',
                ),
                'label'=> 'Descripción'
            ))

            ->add('pais', TextType::class, array(
                'required' => true,
                'attr' => array(
                   'class' => 'form-control',
                   'autocomplete' => 'off',
                ),
                'label'=> 'Pais'
            ))

            ->add('provincia', TextType::class, array(
                'required' => true,
                'attr' => array(
                   'class' => 'form-control',
                   'autocomplete' => 'off',
                ),
                'label'=> 'Provincia'
            ))

            ->add('localidad', TextType::class, array(
                'required' => true,
                'attr' => array(
                   'class' => 'form-control',
                   'autocomplete' => 'off',
                ),
                'label'=> 'Localidad'
            ))

            ->add('domicilio', TextType::class, array(
                'required' => true,
                'attr' => array(
                   'class' => 'form-control',
                   'autocomplete' => 'off',
                ),
                'label'=> 'Domicilio'
            ))

            ->add('foto', TextType::class, array(
                'required' => true,
                'attr' => array(
                   'class' => 'form-control',
                   'autocomplete' => 'off',
                ),
                'label'=> 'Imagen'
            ))

            ->add('precio', NumberType::class, array(
                'required' => true,
                'attr' => array(
                   'class' => 'form-control',
                   'autocomplete' => 'off',
                ),
                // 'precision' => 2,
                'label' => 'Precio'
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Propiedad'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_propiedad';
    }


}
