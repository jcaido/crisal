<?php

namespace crisal\EspecialidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="crisal\EspecialidadBundle\Entity\PruebasDiagnosticasRepository")
 */


class PruebasDiagnosticas
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
    protected $pruebaDiagnostica;
    
    
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
    
    public function setPruebaDiagnostica($pruebaDiagnostica)
    {
        $this->pruebaDiagnostica = $pruebaDiagnostica;
    }
    
    public function getPruebaDiagnostica()
    {
        return $this->pruebaDiagnostica;
    }
    
    public function __toString()
    {
        return $this->getPruebaDiagnostica();
    }
    
}


?>