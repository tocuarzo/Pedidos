<?php
/**
 * Created by PhpStorm.
 * User: serch
 * Date: 20/02/2018
 * Time: 19:42
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Usuario
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="Usuarios")
 */
class Usuario implements UserInterface, \Serializable {

    /**
     * @var
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     */
    private $cod_usu;
    /**
     * @ORM\Column(type="text")
     * @Assert\Email(message="Esto no es un correo")
     *
     */
    private $correo;
    /**
     * @var
     * @ORM\Column(type="text")
     * @Assert\NotNull(message="Este campo no puede estar vacio")
     */
    private $password;
    /**
     * @ORM\Column(type="text")
     */
    private $direccion;
    /**
     * @var
     * @ORM\Column(type="integer", length=5)
     * @Assert\Length(max="5", min="5", exactMessage="Los codigos postales tienen 5 digitos")
     */
    private $CP;
    /**
     * @var
     * @ORM\Column(type="integer", length=9)
     * @Assert\Length(max="9", min="9", exactMessage="Los Numeros de telefono tienen 9 digitos")
     */
    private $telefono;
    /**
     * @ORM\Column(type="boolean", length=1, nullable=false)
     *
     */
    private $admin;

    /**
     * @return mixed
     * @ORM\OneToMany(targetEntity="pedido", mappedBy="usuario")
     */
    private $pedidos;

    public function getCod_usu(){
        return $this->cod_usu;
    }
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo): void
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion): void
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getCP()
    {
        return $this->CP;
    }

    /**
     * @param mixed $CP
     */
    public function setCP($CP): void
    {
        $this->CP = $CP;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }

    public function getCodUsu()
    {
        return $this->cod_usu;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin): void
    {
        $this->admin = $admin;
    }


    public function getRoles()
    {
        if ($this->admin) return array('ROLE_ADMIN');
        return array('ROLE_USER');
    }

    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return $this->correo;
    }

    public function eraseCredentials()
    {
        return null;
    }

    /**
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     * @since 5.1.0
     */
    public function serialize()
    {
        return serialize(array(
            $this->cod_usu,
            $this->correo,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * Constructs the object
     * @link http://php.net/manual/en/serializable.unserialize.php
     * @param string $serialized <p>
     * The string representation of the object.
     * </p>
     * @return void
     * @since 5.1.0
     */
    public function unserialize($serialized)
    {
        list (
            $this->cod_usu,
            $this->correo,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }
    public function __toString(): String
    {
        return $this->correo;
    }
}