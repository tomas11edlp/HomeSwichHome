<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Doctrine\ORM\EntityRepository;
use AppBundle\Form\DataTransformer\EntityToIntTransformer;


class SubastaType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    protected $factory;
    protected $em;

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->factory = $builder->getFormFactory();
        $this->em = $options['em'];

        $propiedadToIntTransformer = new EntityToIntTransformer($options["em"]);
        $propiedadToIntTransformer->setEntityClass("AppBundle\Entity\Propiedad");
        $propiedadToIntTransformer->setEntityRepository("AppBundle:Propiedad");
        $propiedadToIntTransformer->setEntityType("Propiedad");
        
        $builder

            ->add('propiedadP', TextType::class , array(
                'label' => 'Propiedad',
                'mapped' => false,
                'attr' => array(
                    'placeholder' => 'Escriba la propiedad y seleccione',
                    'autocomplete' => 'off',
                    'class' => 'col-10'
                    ),
                ))
            ->add(
                $builder
                    ->create('propiedad', 'Symfony\Component\Form\Extension\Core\Type\HiddenType')
                    ->addModelTransformer($propiedadToIntTransformer)
            )

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
        $resolver->setRequired('em');

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
