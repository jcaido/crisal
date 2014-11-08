<?php

namespace crisal\EspecialistaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="crisal\EspecialistaBundle\Entity\ExperienciaProfesionalRepository")
 */

class ExperienciaProfesional
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\ManyToOne(targetEntity="crisal\EspecialistaBundle\Entity\Especialistas") */
    protected $especialista;
    
    /** @ORM\Column(type="string", length=300) */
    protected $Experiencia_Profesional;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setEspecialista(\crisal\EspecialistaBundle\Entity\Especialialistas $especialista)
    {
        $this->especialista = $especialista;
    }
    
    public function getEspecialista()
    {
        return $this->especialista;
    }
    
    public function setExperiencia_Profesional($Experiencia_Profesional)
    {
        $this->Experiencia_Profesional = $Experiencia_Profesional;
    }
    
    public function getExperiencia_Profesional()
    {
        return $this->Experiencia_Profesional;
    }
    
    public function __toString()
    {
        return $this->Experiencia_Profesional();
    }
}

?>