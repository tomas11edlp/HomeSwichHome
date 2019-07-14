<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class HotSaleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        // $propiedad = $options['propiedad'];

        $builder

            ->add('propiedad', EntityType::class, array(
                'class' => 'AppBundle:Propiedad',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->leftJoin('p.reservas','r')
                        ->leftJoin('p.subastas','s')
                        ->where('s.pujas is empty')
                        ->orWhere('r.estado = 3')
                        ->orderBy('p.titulo', 'ASC');
                },
                'mapped' => false,
                // 'choice_label' => 'username',
                'attr' => array(
                    'placeholder' => 'Seleccione',
                    'autocomplete' => 'off',
                    'class' => 'form-control select2'
                ),
                'placeholder' => 'Seleccione una propiedad'
            ))

            ->add('semana', ChoiceType::class, array(
                'choices'  => array(),
                'mapped' => false,
                'placeholder' => 'Seleccione una semana',
                'attr' => array(
                    'autocomplete' => 'off',
                    'class' => 'form-control select2'
                ) 
            ))

            ->add('inicio', DateType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
            ))

            ->add('fin', DateType::class, array(
                'attr' => array(
                    'class' => 'form-control'
                ),
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
            ))

            ->add('precio', null, array(
                'attr' => array(
                    'class' => 'form-control'
                ),
            ));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\HotSale'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_hotsale';
    }


}
