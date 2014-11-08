<?php

namespace crisal\EspecialidadBundle\Entity;

use Doctrine\ORM\EntityRepository;

class EspecialidadesRepository extends EntityRepository
{
    public function findEspecialidad($especialidad)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT e
                                     FROM EspecialidadBundle:Especialidades e
                                     WHERE e.id = :especialidad');
        
        $consulta->setParameter('especialidad', $especialidad);
        
        return $consulta->getSingleResult();
    }
}


?>