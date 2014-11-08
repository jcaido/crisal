<?php

namespace crisal\EspecialistaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="crisal\EspecialistaBundle\Entity\FormacionNoRegladaRepository")
 */

class FormacionNoReglada
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
    protected $Formacion_No_Reglada;
    
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
    
    public function setFormacion_No_Reglada($Formacion_No_Reglada)
    {
        $this->Formacion_No_Reglada = $Formacion_No_Reglada;
    }
    
    public function getFormacion_No_Reglada()
    {
        return $this->Formacion_No_Reglada;
    }
    
    public function __toString()
    {
        return $this->getFormacion_No_Reglada();
    }
}

?>