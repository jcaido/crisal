<?php

namespace crisal\EspecialistaBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass="crisal\EspecialistaBundle\Entity\EspecialistasRepository")
 * @UniqueEntity("Email_especialista")
 */

class Especialistas implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /** @ORM\ManyToOne(targetEntity="crisal\EspecialidadBundle\Entity\Especialidades") */
    protected $especialidad;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message = "Por favor, escriba el nombre de especialista")
     * @Assert\Length(min = 6, minMessage = "El nombre de especialista debería tener {{ limit }} caracteres o más para considerarse válido")
     */
    protected $Nombre_especialista;
    
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message = "Por favor, escriba el domicilio del especialista")
     */
    protected $Domicilio_especialista;
    
    /**
     * @ORM\Column(type="string", length=5)
     * @Assert\NotBlank(message = "Por favor, escriba el Código Postal del especialista")
     * @Assert\Regex(pattern="/\d{5}/", message = "El Código Postal deberia estar formado por cinco caracteres numéricos")
     */
    protected $CP_especialista;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message = "Por favor, escriba la Localidad del especialista")
     */
    protected $Localidad_especialista;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message = "Por favor, escriba la Provincia del usuario") 
     */
    protected $Provincia_especialista;
    
    /**
     * @ORM\Column(type="string", length=9, nullable=true)
     * @Assert\Regex(pattern="/\d{9}/", message = "El nº de teléfono no es obligatorio, pero deberia estar formado por 9 caracteres numéricos")
     */
    protected $TfoFijo_especialista;
    
    /**
     * @ORM\Column(type="string", length=9, nullable=true)
     * @Assert\Regex(pattern="/\d{9}/", message = "El nº de teléfono no es obligatorio, pero deberia estar formado por 9 caracteres numéricos")
     */
    protected $TfoMovil_especialista;
    
    /** @ORM\Column(type="text") */
    protected $Texto_especialista;
    
    /** @ORM\Column(type="string", length=200) */
    protected $Foto_especialista;
    
    /** @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message = "Por favor, escriba la dirección de e-mail del especialista")
     * @Assert\Email(message = "El formato de la dirección e-mail no es correcto")
     */
    protected $Email_especialista;
    
    /** @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message ="Por favor, escriba la contraseña")
     * @Assert\Length(min = 6, minMessage = "La contraseña debería tener {{ limit }} caracteres o más")
     */
    protected $Password_especialista;
    
    /** @ORM\Column(type="string", length=255) */
    protected $Salt_especialista;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function eraseCredentials()
    {
        
    }
    
    public function getRoles()
    {
        return array('ROLE_ESPECIALISTA');
    }
    
    public function getUsername()
    {
        return $this->getEmailEspecialista();
    }
    
    public function getPassword()
    {
        return $this->getPasswordEspecialista();
    }
    
    public function getSalt()
    {
        return $this->getSaltEspecialista();
    }
    
    public function setEspecialidad(\crisal\EspecialidadBundle\Entity\Especialidades $especialidad)
    {
        $this->especialidad = $especialidad;
    }
    
    public function getEspecialidad()
    {
        return $this->especialidad;
    }
    
    public function setNombreEspecialista($Nombre_especialista)
    {
        $this->Nombre_especialista = $Nombre_especialista;
    }
    
    public function getNombreEspecialista()
    {
        return $this->Nombre_especialista;
    }
    
    public function setDomicilioEspecialista($Domicilio_especialista)
    {
        $this->Domicilio_especialista = $Domicilio_especialista;
    }
    
    public function getDomicilioEspecialista()
    {
        return $this->Domicilio_especialista;
    }
    
    public function setCPEspecialista($CP_especialista)
    {
        $this->CP_especialista = $CP_especialista;
    }
    
    public function getCPEspecialista()
    {
        return $this->CP_especialista;
    }
    
    public function setLocalidadEspecialista($Localidad_especialista)
    {
        $this->Localidad_especialista = $Localidad_especialista;
    }
    
    public function getLocalidadEspecialista()
    {
        return $this->Localidad_especialista;
    }
    
    public function setProvinciaEspecialista($Provincia_especialista)
    {
        $this->Provincia_especialista = $Provincia_especialista;
    }
    
    public function getProvinciaEspecialista()
    {
        return $this->Provincia_especialista;
    }
    
    public function setTfoFijoEspecialista($TfoFijo_especialista)
    {
        $this->TfoFijo_especialista = $TfoFijo_especialista;
    }
    
    public function getTfoFijoEspecialista()
    {
        return $this->TfoFijo_especialista; 
    }
    
    public function setTfoMovilEspecialista($TfoMovil_especialista)
    {
        $this->TfoMovil_especialista = $TfoMovil_especialista;
    }
    
    public function getTfoMovilEspecialista()
    {
        return $this->TfoMovil_especialista;
    }
    
    public function setTextoEspecialista($Texto_especialista)
    {
        $this->Texto_especialista = $Texto_especialista;
    }
    
    public function getTextoEspecialista()
    {
        return $this->Texto_especialista;
    }
    
    public function setFotoEspecialista($Foto_especialista)
    {
        $this->Foto_especialista = $Foto_especialista;
    }
    
    public function getFotoEspecialista()
    {
        return $this->Foto_especialista;
    }
    
    public function setEmailEspecialista($Email_especialista)
    {
        $this->Email_especialista = $Email_especialista;
    }
    
    public function getEmailEspecialista()
    {
        return $this->Email_especialista;
    }
    
    public function setPasswordEspecialista($Password_especialista)
    {
        $this->Password_especialista = $Password_especialista;
    }
    
    public function getPasswordEspecialista()
    {
        return $this->Password_especialista;
    }
    
    public function setSaltEspecialista($Salt_especialista)
    {
        $this->Salt_especialista = $Salt_especialista;
    }
    
    public function getSaltEspecialista()
    {
        return $this->Salt_especialista;
    }
    
    public function __toString()
    {
        return $this->getNombreEspecialista();
    }
}

?>