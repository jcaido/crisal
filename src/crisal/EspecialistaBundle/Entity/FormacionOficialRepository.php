<?php

namespace crisal\EspecialistaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class FormacionOficialRepository extends EntityRepository
{
    public function findFormacionOficial($especialista)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT fo, e
                                     FROM EspecialistaBundle:FormacionOficial fo
                                     JOIN fo.especialista e
                                     WHERE e.id = :especialista');
        
        $consulta->setParameter('especialista', $especialista);
        
        return $consulta->getResult();
    }
}


?>