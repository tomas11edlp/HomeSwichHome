<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class SubastaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('propiedad', null, array(
            'attr' => array(
                'class' => 'form-control'
            ),
            'placeholder' => '-Seleccione-',
            'query_builder' => function(EntityRepository $er ){
                return $er->createQueryBuilder('p')
                  ->orderBy('p.titulo', 'ASC')
                  ->where('p.habilitada = "S"');
              }
        ))
        ->add('montoBase', null, array(
            'attr' => array(
                'class' => 'form-control'
            ),
        ))
        ->add('semanaReserva', HiddenType::class)
        ->add('anioReserva', HiddenType::class)
        // ->add('fechaReservaInicio')
        // ->add('fechaReservaFin')
        // ->add('fechaInicio')
        // ->add('fechaFin')
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Subasta'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_subasta';
    }


}
