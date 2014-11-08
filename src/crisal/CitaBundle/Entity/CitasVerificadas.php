<?php

namespace crisal\CitaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="crisal\CitaBundle\Entity\CitasVerificadasRepository")
 */

 class CitasVerificadas
 {
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\OneToOne(targetEntity="crisal\CitaBundle\Entity\CitasConfirmadas") */
    protected $citaConfirmada;
    
    /** @ORM\Column(type="text")
    * @Assert\NotBlank(message = "Por favor, escriba el motivo que originó la cita")
    */
    protected $Motivo;
    
    /** @ORM\Column(type="text")
    * @Assert\NotBlank(message = "Por favor, escriba la prescripción")
    */
    protected $Prescripcion;
    
    /** @ORM\Column(type="text") */
    protected $Observaciones;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setCitaConfirmada(\crisal\CitaBundle\Entity\CitasConfirmadas $citaConfirmada)
    {
        $this->citaConfirmada = $citaConfirmada;
    }
    
    public function getCitaConfirmada()
    {
        return $this->citaConfirmada;
    }
    
    public function setMotivo($Motivo)
    {
        $this->Motivo = $Motivo;
    }
    
    public function getMotivo()
    {
        return $this->Motivo;
    }
    
    public function setPrescripcion($Prescripcion)
    {
        $this->Prescripcion = $Prescripcion;
    }
    
    public function getPrescripcion()
    {
        return $this->Prescripcion;
    }
    
    public function setObservaciones($Observaciones)
    {
        $this->Observaciones = $Observaciones;
    }
    
    public function getObservaciones()
    {
        return $this->Observaciones;
    }
    
    public function __toString()
    {
        return $this->getCitaConfirmada()->getCitaDisponible()->getFecha_citaDisponible." a las ".$this->getCitaConfirmada()->getCitaDisponible()->getHora_citaDisponible;
    }
 }

?>