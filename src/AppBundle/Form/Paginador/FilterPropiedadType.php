<?php

namespace AppBundle\Form\Paginador;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use DuxBeerBundle\Form\Type\CategoriaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use TecnologicosBundle\Entity\Categoria;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class FilterPropiedadType extends AbstractType
{

	/**
	* @param FormBuilderInterface $builder
	* @param array $options
	*/
	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		$builder
			->add('titulo', TextType::class, array(
				'attr' => array(
					'class' => 'form-control',
					'placeholder'=>'Ingresar título',
					'autocomplete' => 'off'
				),
				'label' => 'Titulo'
			))

            ->add('precioMaximo', NumberType::class, array(
                'required' => true,
                'attr' => array(
                   'class' => 'form-control',
                   'autocomplete' => 'off',
       				'placeholder'=>'Precio máximo',
                ),
                'label' => ''
            ))

            ->add('precioMinimo', NumberType::class, array(
                'required' => true,
                'attr' => array(
                   'class' => 'form-control',
                   'autocomplete' => 'off',
       				'placeholder'=>'Precio mínimo',
                ),
                'label' => ''
            ));
	}

	/**
	* @param OptionsResolverInterface $resolver
	*/
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			null
		));
	}

	/**
	* @return string
	*/
	public function getName()
	{
		return 'FilterCategoriasType';
	}
}

?>
