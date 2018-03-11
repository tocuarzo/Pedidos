<?php
/**
 * Created by PhpStorm.
 * User: serch
 * Date: 07/03/2018
 * Time: 15:39
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Pedido
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="Pedidos")
 */
class Pedido{
    /**
     * @var
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     */
    private $cod_pedido;
    /**
     * @var
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $fecha_pedido;
    /**
     * @var
     * @ORM\Column(type="boolean", nullable=false)
     */
    private $enviado;
    /**
     * @var
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario", inversedBy="pedidos")
     * @ORM\JoinColumn(referencedColumnName="cod_usu", name="usuario")
     */
    private $usuario;

    /**
     * @return mixed
     */
    public function getCod_Pedido()
    {
        return $this->cod_pedido;
    }

    /**
     * @param mixed $cod_pedido
     */
    public function setCod_Pedido($cod_pedido): void
    {
        $this->cod_pedido = $cod_pedido;
    }

    /**
     * @return mixed
     */
    public function getFechaPedido()
    {
        return $this->fecha_pedido;
    }

    /**
     * @param mixed $fecha_pedido
     */
    public function setFechaPedido($fecha_pedido): void
    {
        $this->fecha_pedido = $fecha_pedido;
    }

    /**
     * @return mixed
     */
    public function getEnviado()
    {
        return $this->enviado;
    }

    /**
     * @param mixed $enviado
     */
    public function setEnviado($enviado): void
    {
        $this->enviado = $enviado;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario): void
    {
        $this->usuario = $usuario;
    }
    public function __get($name)
    {
        return $this->cod_pedido;
    }
}