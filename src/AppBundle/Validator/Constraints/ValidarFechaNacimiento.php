<?php

namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ValidarFechaNacimiento extends Constraint
{
    const ERROR_PATH_FORM = 'form';
    const ERROR_PATH_FIELD = 'field';

    public $message = 'Debe ser mayor de 18 años.';

    /**
     * @return string
     */
    public function validatedBy()
    {
        return get_class($this).'Validator';
    }


    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}