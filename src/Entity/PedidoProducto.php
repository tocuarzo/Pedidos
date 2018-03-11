<?php
/**
 * Created by PhpStorm.
 * User: serch
 * Date: 07/03/2018
 * Time: 16:01
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class PedidoProducto
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="Pedido_Producto")
 */
class PedidoProducto{
    /**
     * @var $cod_ped_prod
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $cod_ped_prod;
    /**
     * @var $cod_ped
     * @ORM\ManyToOne(targetEntity="App\Entity\Pedido")
     * @ORM\JoinColumn(referencedColumnName="cod_pedido", name="cod_ped")
     */
    private $cod_ped;
    /**
     * @var $cod_prod
     * @ORM\ManyToOne(targetEntity="App\Entity\Producto")
     * @ORM\JoinColumn(referencedColumnName="cod_prod", name="cod_prod")
     */
    private $cod_prod;
    /**
     * @var $unidades
     * @ORM\Column(type="integer")
     */
    private $unidades;

    /**
     * @return mixed
     */
    public function getCodPedProd()
    {
        return $this->cod_ped_prod;
    }

    /**
     * @param mixed $cod_ped_prod
     */
    public function setCodPedProd($cod_ped_prod): void
    {
        $this->cod_ped_prod = $cod_ped_prod;
    }

    /**
     * @return mixed
     */
    public function getCodPed()
    {
        return $this->cod_ped;
    }

    /**
     * @param mixed $cod_ped
     */
    public function setCodPed($cod_ped): void
    {
        $this->cod_ped = $cod_ped;
    }

    /**
     * @return mixed
     */
    public function getCodProd()
    {
        return $this->cod_prod;
    }

    /**
     * @param mixed $cod_prod
     */
    public function setCodProd($cod_prod): void
    {
        $this->cod_prod = $cod_prod;
    }

    /**
     * @return mixed
     */
    public function getUnidades()
    {
        return $this->unidades;
    }

    /**
     * @param mixed $unidades
     */
    public function setUnidades($unidades): void
    {
        $this->unidades = $unidades;
    }
}