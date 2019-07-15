<?php
 
namespace AppBundle\Form\EventListener;
 
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManagerInterface;

class AddSemanaFieldSubscriber implements EventSubscriberInterface
{
    private $factory;
    private $em;

    public function __construct(FormFactoryInterface $factory, EntityManagerInterface $em)
    {
        $this->factory = $factory;
        $this->em = $em;

        // $this->convocatoria = $convocatoria;
    }
 
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT => 'preBind'
        );
    }
 
    public function addSemanaForm($form, $propiedad)
    {
        $result = array();


        //Semanas de subastas disponibles por propiedad para hot sale
        $semanasSubastas = $this->em->getRepository('AppBundle:Propiedad')->semanasSubastasDisponiblesHotSale($propiedad);
        
        foreach ($semanasSubastas as $ss) {
            
            $key = $ss['semanaSubasta'].' - '.$ss['anioSubasta'];

            if ( !array_key_exists($key, $result) ) {
               
                $result[$key] = $ss['semanaSubasta'].' - '.$ss['anioSubasta']; 
            
            }
        }

        //Semanas de reservas disponibles por propiedad para hot sale
        $semanasReservas = $this->em->getRepository('AppBundle:Propiedad')->semanasReservasDisponiblesHotSale($propiedad);
        
        foreach ($semanasReservas as $sr) {
            
            $key = $sr['semanaReserva'].' - '.$sr['anioReserva'];

            if ( !array_key_exists($key, $result) ) {
               
                $result[$key] = $sr['semanaReserva'].' - '.$sr['anioReserva']; 
            
            }
        }

        // $choices = $this->em->getRepository('Propiedad')->;

        $form->add($this->factory->createNamed('semana',ChoiceType::class, null, array(
            'choices' => $result,
            'mapped' => false,
            'placeholder' => 'Seleccionar una cátedra',
            'auto_initialize' => false,
            'attr' => array(
               'class' => 'form-control select2',
               'autocomplete' => 'off',
               'style' => 'width:100%;',
            ),
            'label'=> 'Semana',
        )));
        
    }
 
    public function preSetData(FormEvent $event)
    {
        
        $data = $event->getData();
        $form = $event->getForm();
        
        if (null === $data) {
            return;
        }
        
        $propiedad = ( $form->get('propiedad') ) ? $form->get('propiedad')->getData() : null ;
        
        $this->addSemanaForm($form, $propiedad);
    }
 
    public function preBind(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
        
        if (null === $data) {
            return;
        }
        
        $propiedad = array_key_exists('propiedad', $data) ? $data['propiedad'] : null;
        $this->addSemanaForm($form, $propiedad);
    }
}