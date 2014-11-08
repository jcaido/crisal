<?php

namespace crisal\CitaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="crisal\CitaBundle\Entity\CitasConfirmadasRepository")
 */

class CitasConfirmadas
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\OneToOne(targetEntity="crisal\CitaBundle\Entity\CitasDisponibles") */
    protected $citaDisponible;
    
    /** @ORM\ManyToOne(targetEntity="crisal\UsuarioBundle\Entity\Usuarios") */
    protected $usuario;
    
    /** @ORM\Column(type="boolean") */
    protected $Verificada;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setCitaDisponible(\crisal\CitaBundle\Entity\CitasDisponibles $citaDisponible)
    {
        $this->citaDisponible = $citaDisponible;
    }
    
    public function getCitaDisponible()
    {
        return $this->citaDisponible;
    }
    
    public function setUsuario(\crisal\UsuarioBundle\Entity\Usuarios $usuario)
    {
        $this->usuario = $usuario;
    }
    
    public function getUsuario()
    {
        return $this->usuario;
    }
    
    public function setVerificada($Verificada)
    {
        $this->Verificada = $Verificada;
    }
    
    public function getVerificada()
    {
        return $this->Verificada;
    }
    
    public function __toString()
    {
        return $this->getCitaDisponible()->getFecha_citaDisponible()." a las ".$this->getCitaDisponible()->getHora_citaDisponible();
    }
}

?>