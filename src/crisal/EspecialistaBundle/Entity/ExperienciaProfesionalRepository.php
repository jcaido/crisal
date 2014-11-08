<?php

namespace crisal\EspecialistaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ExperienciaProfesionalRepository extends EntityRepository
{
    public function findExperienciaProfesional($especialista)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT ep, e
                                     FROM EspecialistaBundle:ExperienciaProfesional ep
                                     JOIN ep.especialista e
                                     WHERE e.id = :especialista');
        
        $consulta->setParameter('especialista', $especialista);
        
        return $consulta->getResult();
    }
}


?>