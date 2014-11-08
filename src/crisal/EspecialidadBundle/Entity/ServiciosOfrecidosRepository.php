<?php

namespace crisal\EspecialidadBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ServiciosOfrecidosRepository extends EntityRepository
{
    public function findServiciosOfrecidos($especialidad)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT s, e
                                     FROM EspecialidadBundle:ServiciosOfrecidos s
                                     JOIN s.especialidad e
                                     WHERE e.id = :especialidad');
        
        $consulta->setParameter('especialidad', $especialidad);
        
        return $consulta->getResult();
    }
}


?>