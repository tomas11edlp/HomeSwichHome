<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Form\EventListener\AddSemanaFieldSubscriber;

class HotSaleType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $em = $options['em'];

        $hoy = new \Datetime('now');
        
        $builder

            ->add('propiedad', EntityType::class, array(
                'class' => 'AppBundle:Propiedad',
                'query_builder' => function (EntityRepository $er) use($hoy) {
                    return $er->createQueryBuilder('p')
                        ->leftJoin('p.reservas','r')
                        ->leftJoin('p.subastas','s')
                        ->where("p.habilitada != 'N'")
                        ->andWhere('s.pujas is empty and s.fechaReservaInicio > :hoy')
                        ->orWhere('r.estado = 3 and r.fechaInicio > :hoy')
                        // ->andWhere('s.fechaReservaInicio > :hoy')
                        // ->andWhere('')
                        ->setParameter('hoy', $hoy)
                        ->orderBy('p.titulo', 'ASC');
                },
                // 'choice_label' => 'username',
                'attr' => array(
                    'placeholder' => 'Seleccione',
                    'autocomplete' => 'off',
                    'class' => 'form-control select2'
                ),
                'placeholder' => 'Seleccione una propiedad'
            ))

            ->add('precio', null, array(
                'required' => true,
                'attr' => array(
                    'class' => 'form-control'
                ),
            ));

            $factory = $builder->getFormFactory();
            $semanaSubscriber = new AddSemanaFieldSubscriber($factory, $em);
            $builder->addEventSubscriber($semanaSubscriber);

            

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {   
        $resolver->setRequired('em');
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
