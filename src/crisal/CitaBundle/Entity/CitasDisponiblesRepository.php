<?php

namespace crisal\CitaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class CitasDisponiblesRepository extends EntityRepository
{
    public function findCitasDisponibles($especialista)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT cd 
                                     FROM CitaBundle:CitasDisponibles cd
                                     WHERE cd.especialista = :especialista
                                     AND cd.Disponible = :disponible
                                     GROUP BY cd.Fecha_citaDisponible
                                     ORDER BY cd.Fecha_citaDisponible ASC');
        
        $consulta->setParameter('especialista', $especialista);
        $consulta->setParameter('disponible', 1);
        
        return $consulta->getResult();
    }
    
    public function findHorasDisponibles($especialista, $diaDisponible)
    {
        $fecha = date("Y-m-d", strtotime($diaDisponible));
        
        $em = $this->getEntityManager();
        $consulta = $em->createQuery('SELECT cd
                                     FROM CitaBundle:CitasDisponibles cd
                                     WHERE cd.especialista = :especialista
                                     AND cd.Disponible = :disponible
                                     AND cd.Fecha_citaDisponible = :diaDisponible
                                     ORDER BY cd.Hora_citaDisponible ASC');
        
        $consulta->setParameter('especialista', $especialista);
        $consulta->setParameter('disponible', 1);
        $consulta->setParameter('diaDisponible', $fecha);
        
        return $consulta->getResult();
    }
    
    public function findCitaDisponible($idCitaDisponible)
    {
       $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT cd
                                     FROM CitaBundle:CitasDisponibles cd
                                     WHERE cd.id = :idCitaDisponible');
        
        $consulta->setParameter('idCitaDisponible', $idCitaDisponible);
        
        return $consulta->getSingleResult();
    }
}


?>