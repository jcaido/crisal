<?php

namespace crisal\CitaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class CitasConfirmadasRepository extends EntityRepository
{
    public function findCitasConfirmadasU($citas)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT cc, cd, u, et, ed
                                     FROM CitaBundle:CitasConfirmadas cc
                                     JOIN cc.citaDisponible cd
                                     JOIN cc.usuario u
                                     JOIN cd.especialista et
                                     JOIN et.especialidad ed
                                     WHERE u.id = :usuario
                                     AND cc.Verificada = :verificada
                                     ORDER BY cd.Fecha_citaDisponible DESC');
        
        
        $consulta->setParameter('usuario', $citas);
        $consulta->setParameter('verificada', 0);
        
        return $consulta->getResult();
    }
    
    public function findCitasConfirmadasUsuario($user, $especialista)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT cc, cd
                                     FROM CitaBundle:CitasConfirmadas cc
                                     JOIN cc.citaDisponible cd
                                     WHERE cc.usuario = :usuario
                                     AND cc.Verificada = :verificada
                                     AND cd.especialista = :especialista');
        
        $consulta->setParameter('usuario', $user);
        $consulta->setParameter('especialista', $especialista);
        $consulta->setParameter('verificada', 0);
        
        return $consulta->getResult();
    }
    
    public function findCitasConfirmadasEspecialistaFecha($especialista, $fecha)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT cc, cd
                                     FROM CitaBundle:CitasConfirmadas cc
                                     JOIN cc.citaDisponible cd
                                     WHERE cc.Verificada = :verificada
                                     AND cd.especialista = :especialista
                                     AND cd.Fecha_citaDisponible > :fechaCita
                                     GROUP BY cd.Fecha_citaDisponible
                                     ORDER BY cd.Fecha_citaDisponible ASC');
        
        $consulta->setParameter('especialista', $especialista);
        $consulta->setParameter('verificada', 0);
        $consulta->setParameter('fechaCita', $fecha);
        
        return $consulta->getResult();
    }
    
    public function findCitasConfirmadasEspecialistaHoy($especialista, $fecha)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT cc, cd, u
                                     FROM CitaBundle:CitasConfirmadas cc
                                     JOIN cc.citaDisponible cd
                                     JOIN cc.usuario u
                                     WHERE cc.Verificada = :verificada
                                     AND cd.especialista = :especialista
                                     AND cd.Fecha_citaDisponible = :fechaCita');
        
        $consulta->setParameter('especialista', $especialista);
        $consulta->setParameter('verificada', 0);
        $consulta->setParameter('fechaCita', $fecha);
        
        return $consulta->getResult();
    }
}


?>