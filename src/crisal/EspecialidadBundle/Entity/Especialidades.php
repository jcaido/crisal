<?php

namespace crisal\EspecialidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="crisal\EspecialidadBundle\Entity\EspecialidadesRepository")
 */

class Especialidades
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\Column(type="string", length=100) */
    protected $Nombre_especialidad;
    
    /** @ORM\Column(type="text") */
    protected $Texto_especialidad;
    
    /** @ORM\Column(type="string", length=200) */
    protected $Foto_especialidad;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setNombre_especialidad($Nombre_especialidad)
    {
        $this->Nombre_especialidad = $Nombre_especialidad;
    }
    
    public function getNombre_especialidad()
    {
        return $this->Nombre_especialidad;
    }
    
    public function setTexto_especialidad($Texto_especialidad)
    {
        $this->Texto_especialidad = $Texto_especialidad;
    }
    
    public function getTexto_especialidad()
    {
        return $this->Texto_especialidad;
    }
    
    public function setFoto_especialidad($Foto_especialidad)
    {
        $this->Foto_especialidad = $Foto_especialidad;
    }
    
    public function getFoto_especialidad()
    {
        return $this->Foto_especialidad;
    }
    
    public function __toString()
    {
        return $this->getNombre_especialidad();
    }
    
}


?>