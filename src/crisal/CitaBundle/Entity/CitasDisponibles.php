<?php

namespace crisal\CitaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="crisal\CitaBundle\Entity\CitasDisponiblesRepository")
 */

class CitasDisponibles
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(type="date") */
    protected $Fecha_citaDisponible;
    
    /** @ORM\Column(type="time") */
    protected $Hora_citaDisponible;
    
    /** @ORM\ManyToOne(targetEntity="crisal\EspecialistaBundle\Entity\Especialistas") */
    protected $especialista;
    
    /** @ORM\Column(type="boolean") */
    protected $Disponible;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setFecha_citaDisponible($Fecha_citaDesponible)
    {
        $this->Fecha_citaDisponible = $Fecha_citaDesponible;
    }
    
    public function getFecha_citaDisponible()
    {
        return $this->Fecha_citaDisponible;
    }
    
    public function setHora_citaDisponible($Hora_citaDisponible)
    {
        $this->Hora_citaDisponible = $Hora_citaDisponible;
    }
    
    public function getHora_citaDisponible()
    {
        return $this->Hora_citaDisponible;
    }
    
    public function setEspecialista(\crisal\EspecialistaBundle\Entity\Especialistas $especialista)
    {
        $this->especialista = $especialista; 
    }
    
    public function getEspecialista()
    {
        return $this->especialista;
    }
    
    public function setDisponible($Disponible)
    {
        $this->Disponible = $Disponible;
    }
    
    public function getDisponible()
    {
        return $this->Disponible;
    }
    
    public function __toString()
    {
        return $this->getFecha_citaDisponible()." a las ".$this->getHora_citaDisponible()." horas";
    }
}

?>