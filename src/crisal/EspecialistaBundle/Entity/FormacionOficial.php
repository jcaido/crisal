<?php

namespace crisal\EspecialistaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="crisal\EspecialistaBundle\Entity\FormacionOficialRepository")
 */

class FormacionOficial
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
    protected $Formacion_Oficial;
    
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
    
    public function setFormacion_Oficial($Formacion_Oficial)
    {
        $this->Formacion_Oficial = $Formacion_Oficial;
    }
    
    public function getFormacion_Oficial()
    {
        return $this->Formacion_Oficial;
    }
    
    public function __toString()
    {
        return $this->getFormacion_Oficial();
    }
}

?>