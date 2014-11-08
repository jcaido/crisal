<?php

namespace crisal\EspecialistaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class EspecialistasRepository extends EntityRepository
{
    public function findEspecialista($especialista)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT e
                                     FROM EspecialistaBundle:Especialistas e
                                     WHERE e.id = :especialista');
        
        $consulta->setParameter('especialista', $especialista);
        
        return $consulta->getSingleResult();
    }
    
    public function findEspecialistasByEspecialidad($especialidad)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT e
                                     FROM EspecialistaBundle:Especialistas e
                                     WHERE e.especialidad = :especialidad');
        $consulta->setParameter('especialidad', $especialidad);
        
        return $consulta->getResult();
    }
}


?>