<?php

namespace crisal\EspecialistaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class FormacionNoRegladaRepository extends EntityRepository
{
    public function findFormacionNoReglada($especialista)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT fnr, e
                                     FROM EspecialistaBundle:FormacionNoReglada fnr
                                     JOIN fnr.especialista e
                                     WHERE e.id = :especialista');
        
        $consulta->setParameter('especialista', $especialista);
        
        return $consulta->getResult();
    }
}


?>