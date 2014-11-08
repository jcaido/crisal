<?php

namespace crisal\EspecialidadBundle\Entity;

use Doctrine\ORM\EntityRepository;

class EquiposyTecnologiaRepository extends EntityRepository
{
    public function findEquipos($especialidad)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT eq, e
                                     FROM EspecialidadBundle:EquiposyTecnologia eq
                                     JOIN eq.especialidad e
                                     WHERE e.id = :especialidad');
        
        $consulta->setParameter('especialidad', $especialidad);
        
        return $consulta->getResult();
    }
}


?>