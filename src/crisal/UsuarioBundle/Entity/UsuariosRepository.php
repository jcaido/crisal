<?php

namespace crisal\UsuarioBundle\Entity;

use Doctrine\ORM\EntityRepository;

class UsuariosRepository extends EntityRepository
{
    public function findPerfilUsuario($usuario)
    {
        $em = $this->getEntityManager();
        
        $consulta = $em->createQuery('SELECT u
                                     FROM UsuarioBundle:Usuarios u
                                     WHERE u.id = :usuario');
        
        $consulta->setParameter('usuario', $usuario);
        
        return $consulta->getSingleResult();
    }
}


?>