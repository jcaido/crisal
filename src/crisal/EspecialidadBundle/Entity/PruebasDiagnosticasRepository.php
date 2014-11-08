<?php

namespace crisal\EspecialidadBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PruebasDiagnosticasRepository extends EntityRepository
{
    public function findPruebasDiagnosticas($especialidad)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT p, e
                                     FROM EspecialidadBundle:PruebasDiagnosticas p
                                     JOIN p.especialidad e
                                     WHERE e.id = :especialidad');
        
        $consulta->setParameter('especialidad', $especialidad);
        
        return $consulta->getResult();
    }
}


?>