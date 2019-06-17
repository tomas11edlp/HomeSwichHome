<?php

namespace AppBundle\Form\Paginador;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use DuxBeerBundle\Form\Type\CategoriaType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use TecnologicosBundle\Entity\Usuario;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class FilterUsuarioType extends AbstractType
{

	/**
	* @param FormBuilderInterface $builder
	* @param array $options
	*/
	public function buildForm(FormBuilderInterface $builder, array $options)
	{

		$builder
			->add('nombreCompleto', TextType::class, array(
				'required' => false,
				'attr' => array(
					'class' => 'form-control',
					'placeholder'=>'Nombre y apellido',
					'autocomplete' => 'off'
				),
				'label' => 'Nombre y apellido'
			))

            ->add('rol', ChoiceType::class, array(
                'choices' => array(
                	'Premium' => 'PREMIUM',
                	'Común'   => 'COMUN'
                ),
                'required' => false,
                'attr' => array(
                   'class' => 'form-control select2',
                   'autocomplete' => 'off',
                ),
       			'placeholder'=>'Tipo de usuario',
                // 'label' => 'Seleccione'
            ))

            ->add('fechaRegistro', DateType::class, array(
                'required' => false,
                'attr' => array(
                   'class' => 'form-control date',
                   'autocomplete' => 'off',
       				'placeholder'=>'Fecha de registro',
                ),
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
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
		return 'FilterUsuarioType';
	}
}

?>
