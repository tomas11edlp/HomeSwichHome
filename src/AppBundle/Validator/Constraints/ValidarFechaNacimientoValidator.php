<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ValidarFechaNacimientoValidator extends ConstraintValidator
{
    public function validate($usuario, Constraint $constraint = null)
    {
        
        $fechaNac = $usuario->getFechaNacimiento();
        
        if ( !empty($fechaNac) ) {

            // $d1 = new DateTime('2011-03-12');
            $d2 = new \DateTime('today');

            $resultado = $d2->diff($fechaNac);

            $edad = $resultado->y; 
            
            if ( $edad < 18 ) {

                $this->context->buildViolation($constraint->message)
                    ->atPath('fechaNacimiento')
                    ->addViolation();
            }
    
        }else{

            $this->context->buildViolation($constraint->message)
                ->atPath('fechaNacimiento')
                ->addViolation();

        }

    }
    
}