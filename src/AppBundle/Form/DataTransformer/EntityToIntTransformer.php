<?php 

namespace AppBundle\Form\DataTransformer;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;

class EntityToIntTransformer implements DataTransformerInterface
{
    /**
     * @var \Doctrine\Common\Persistence\ObjectManager
     */
    private $om;
    private $entityClass;
    private $entityType;
    private $entityRepository;

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    /**
     * @param mixed $entity
     *
     * @throws \Symfony\Component\Form\Exception\TransformationFailedException
     *
     * @return integer
     */
    public function transform($entity)
    {
        // Modified from comments to use instanceof so that base classes or
        // interfaces can be specified
        if (null === $entity ||!$entity instanceof $this->entityClass) {
            return -1;
//            throw new TransformationFailedException(
//                    "$this->entityType object must be provided");
        }

        return $entity->getId();
    }

    /**
     * @param mixed $id
     *
     * @throws \Symfony\Component\Form\Exception\TransformationFailedException
     *
     * @return mixed|object
     */
    public function reverseTransform($id)
    {

        if ($id == "-1")
                return null;
        if (!$id) {
            throw new TransformationFailedException(
                    "No $this->entityType id was submitted");
        }

        $entity = $this->om->getRepository($this->entityRepository)
                ->findOneBy(array("id" => $id));

        if (null === $entity) {
            throw new TransformationFailedException(sprintf(
                'A %s with id "%s" does not exist!',
                $this->entityType,
                $id
            ));
        }

        return $entity;
    }

    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
    }

    public function setEntityClass($entityClass)
    {
        $this->entityClass = $entityClass;
    }

    public function setEntityRepository($entityRepository)
    {
        $this->entityRepository = $entityRepository;
    }
}
