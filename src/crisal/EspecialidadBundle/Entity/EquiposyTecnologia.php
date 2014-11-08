<?php

namespace crisal\EspecialidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="crisal\EspecialidadBundle\Entity\EquiposyTecnologiaRepository")
 */


class EquiposyTecnologia
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\ManyToOne(targetEntity="crisal\EspecialidadBundle\Entity\Especialidades") */
    protected $especialidad;
    
    /** @ORM\Column(type="string", length=200) */
    protected $equipo;
    
    /** @ORM\Column(type="string", length=200) */
    protected $FotoEquipo;
    
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setEspecialidad(\crisal\EspecialidadBundle\Entity\Especialidades $especialidad)
    {
        $this->especialidad = $especialidad;
    }
    
    public function getEspecialidad()
    {
        return $this->especialidad;
    }
    
    public function setEquipo($equipo)
    {
        $this->equipo = $equipo;
    }
    
    public function getEquipo()
    {
        return $this->equipo;
    }
    
    public function setFotoEquipo($FotoEquipo)
    {
        $this->FotoEquipo = $FotoEquipo;
    }
    
    public function getFotoEquipo()
    {
        return $this->FotoEquipo;
    }
    
    public function __toString()
    {
        return $this->getEquipo();
    }
    
}


?>