<?php
/**
 * Created by PhpStorm.
 * User: serch
 * Date: 20/02/2018
 * Time: 19:42
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class Usuario
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="Usuarios")
 */
class Usuario{

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
     */
    private $correo;
    /**
     * @var
     * @ORM\Column(type="text")
     */
    private $password;
    /**
     * @ORM\Column(type="text")
     */
    private $direccion;
    /**
     * @var
     * @ORM\Column(type="integer", length=5)
     */
    private $CP;
    /**
     * @var
     * @ORM\Column(type="integer", length=9)
     */
    private $telefono;

    /**
     * @return mixed
     */
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

}