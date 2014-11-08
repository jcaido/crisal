<?php

namespace crisal\CitaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class CitasVerificadasRepository extends EntityRepository
{
    public function findCitasUsuario($citas)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT cv, cc, cd, u, et, ed
                                     FROM CitaBundle:CitasVerificadas cv
                                     JOIN cv.citaConfirmada cc
                                     JOIN cc.citaDisponible cd
                                     JOIN cc.usuario u
                                     JOIN cd.especialista et
                                     JOIN et.especialidad ed
                                     WHERE u.id = :usuario
                                     ORDER BY cd.Fecha_citaDisponible DESC');
        
        
        $consulta->setParameter('usuario', $citas);
        
        return $consulta->getResult();
    }
    
    public function findCitasVerificadas($usuario, $especialidad)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT cv, cc, cd, u, et, ed
                                     FROM CitaBundle:CitasVerificadas cv
                                     JOIN cv.citaConfirmada cc
                                     JOIN cc.citaDisponible cd
                                     JOIN cc.usuario u
                                     JOIN cd.especialista et
                                     JOIN et.especialidad ed
                                     WHERE u.id = :usuario
                                     AND ed.id = :especialidad
                                     ORDER BY cd.Fecha_citaDisponible DESC');
        
        $consulta->setParameter('usuario', $usuario);
        $consulta->setParameter('especialidad', $especialidad);
        
        return $consulta->getResult();
    }
    
    public function findCitasVerificadasEspecialistaHoy($especialista, $fecha_actual)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT cv, cc, cd, u, et, ed
                                     FROM CitaBundle:CitasVerificadas cv
                                     JOIN cv.citaConfirmada cc
                                     JOIN cc.citaDisponible cd
                                     JOIN cc.usuario u
                                     JOIN cd.especialista et
                                     JOIN et.especialidad ed
                                     WHERE et.id = :especialista
                                     AND cd.Fecha_citaDisponible = :hoy');
        
        $consulta->setParameter('especialista', $especialista);
        $consulta->setParameter('hoy', $fecha_actual);
        
        return $consulta->getResult();
    }
    
    public function findCitasVerificadasUsuarios($nombre, $especialidad)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT cv, cc, cd, u, et, ed
                                     FROM CitaBundle:CitasVerificadas cv
                                     JOIN cv.citaConfirmada cc
                                     JOIN cc.citaDisponible cd
                                     JOIN cc.usuario u
                                     JOIN cd.especialista et
                                     JOIN et.especialidad ed
                                     WHERE u.Nombre_usuario LIKE :nombre
                                     AND ed.id = :especialidad
                                     GROUP BY u.Nombre_usuario');
        
        $consulta->setParameter('nombre', '%'.$nombre.'%');
        $consulta->setParameter('especialidad', $especialidad);
        
        return $consulta->getResult();
    }
    
    public function findCitasVerificadasUsuariosTodos($especialidad)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT cv, cc, cd, u, et, ed
                                     FROM CitaBundle:CitasVerificadas cv
                                     JOIN cv.citaConfirmada cc
                                     JOIN cc.citaDisponible cd
                                     JOIN cc.usuario u
                                     JOIN cd.especialista et
                                     JOIN et.especialidad ed
                                     WHERE ed.id = :especialidad
                                     GROUP BY u.Nombre_usuario');
        
        
        $consulta->setParameter('especialidad', 1);
        
        return $consulta->getResult();
    }
}


?>
