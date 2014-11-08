<?php

namespace crisal\UsuarioBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="crisal\UsuarioBundle\Entity\UsuariosRepository")
 * @UniqueEntity("Email_usuario")
 */

class Usuarios implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message = "Por favor, escriba el nombre de usuario")
     * @Assert\Length(min = 6, minMessage = "El nombre de usuario debería tener {{ limit }} caracteres o más para considerarse válido")
     */
    protected $Nombre_usuario;
    
    /** @ORM\Column(type="text")
     * @Assert\NotBlank(message = "Por favor, escriba el domicilio del usuario")
     */
    protected $Domicilio_usuario;
    
    /** @ORM\Column(type="string", length=5)
     * @Assert\NotBlank(message = "Por favor, escriba el Código Postal del usuario")
     * @Assert\Regex(pattern="/\d{5}/", message = "El Código Postal deberia estar formado por cinco caracteres numéricos")
     */
    protected $CP_usuario;
    
    /** @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message = "Por favor, escriba la Localidad del usuario")
     */
    protected $Localidad_usuario;
    
    /** @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message = "Por favor, escriba la Provincia del usuario")
     */
    protected $Provincia_usuario;
    
    /** @ORM\Column(type="string", length=9, nullable=true)
     * @Assert\Regex(pattern="/\d{9}/", message = "El nº de teléfono no es obligatorio, pero deberia estar formado por 9 caracteres numéricos")
     */
    protected $TfoFijo_usuario;
    
    /** @ORM\Column(type="string", length=9, nullable=true)
     * @Assert\Regex(pattern="/\d{9}/", message = "El nº de teléfono no es obligatorio, pero deberia estar formado por 9 caracteres numéricos")
     */
    protected $TfoMovil_usuario;
    
    /** @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message = "Por favor, escriba la dirección de e-mail del usuario")
     * @Assert\Email(message = "El formato de la dirección e-mail no es correcto")
     */
    protected $Email_usuario;
    
    /** @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message ="Por favor, escriba la contraseña")
     * @Assert\Length(min = 6, minMessage = "La contraseña debería tener {{ limit }} caracteres o más")
     */
    protected $Password_usuario;
    
    /** @ORM\Column(type="string", length=255) */
    protected $Salt_usuario;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function eraseCredentials()
    {
        
    }
    
    public function getRoles()
    {
        return array('ROLE_USUARIO');
    }
    
    public function getUsername()
    {
        return $this->getEmailUsuario();
    }
    
    public function getPassword()
    {
        return $this->getPasswordUsuario();
    }
    
    public function getSalt()
    {
        return $this->getSaltUsuario();
    }
    
    public function setNombreUsuario($Nombre_usuario)
    {
        $this->Nombre_usuario = $Nombre_usuario;
    }
    
    public function getNombreUsuario()
    {
        return $this->Nombre_usuario;
    }
    
    public function setDomicilioUsuario($Domicilio_usuario)
    {
        $this->Domicilio_usuario = $Domicilio_usuario;
    }
    
    public function getDomicilioUsuario()
    {
        return $this->Domicilio_usuario;
    }
    
    public function setCPUsuario($CP_usuario)
    {
        $this->CP_usuario = $CP_usuario;
    }
    
    public function getCPUsuario()
    {
        return $this->CP_usuario;
    }
    
    public function setLocalidadUsuario($Localidad_usuario)
    {
        $this->Localidad_usuario = $Localidad_usuario;
    }
    
    public function getLocalidadUsuario()
    {
        return $this->Localidad_usuario;
    }
    
    public function setProvinciaUsuario($Provincia_usuario)
    {
        $this->Provincia_usuario = $Provincia_usuario;
    }
    
    public function getProvinciaUsuario()
    {
        return $this->Provincia_usuario;
    }
    
    public function setTfoFijoUsuario($TfoFijo_usuario)
    {
        $this->TfoFijo_usuario = $TfoFijo_usuario;
    }
    
    public function getTfoFijoUsuario()
    {
        return $this->TfoFijo_usuario;
    }
    
    public function setTfoMovilUsuario($TfoMovil_usuario)
    {
        $this->TfoMovil_usuario = $TfoMovil_usuario;
    }
    
    public function getTfoMovilUsuario()
    {
        return $this->TfoMovil_usuario;
    }
    
    public function setEmailUsuario($Email_usuario)
    {
        $this->Email_usuario = $Email_usuario;
    }
    
    public function getEmailUsuario()
    {
        return $this->Email_usuario;
    }
    
    public function setPasswordUsuario($Password_usuario)
    {
        $this->Password_usuario = $Password_usuario;
    }
    
    public function getPasswordUsuario()
    {
        return $this->Password_usuario;
    }
    
    public function setSaltUsuario($Salt_usuario)
    {
        $this->Salt_usuario = $Salt_usuario;
    }
    
    public function getSaltUsuario()
    {
        return $this->Salt_usuario;
    }
    
    public function __toString()
    {
        return $this->getNombreUsuario();
    }
}

?>