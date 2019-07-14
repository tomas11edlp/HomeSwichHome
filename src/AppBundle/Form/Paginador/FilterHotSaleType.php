<?php

namespace AppBundle\Form\Paginador;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class FilterHotSaleType extends AbstractType
{

	/**
	* @param FormBuilderInterface $builder
	* @param array $options
	*/
	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		$builder
			->add('titulo', TextType::class, array(
				'required' => false,
				'attr' => array(
					'class' => 'form-control',
					'placeholder'=>'Titulo de la propiedad',
					'autocomplete' => 'off'
				),
				'label' => 'Título o descripción'
			))

            ->add('semana', NumberType::class, array(
                'required' => false,
                'attr' => array(
                   'class' => 'form-control',
                   'autocomplete' => 'off',
       			   'placeholder'=>'Número de semana',
                ),
                // 'label' => 'Seleccione'
            ))
            ;
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
		return 'FilterHotSaleType';
	}
}

?>
