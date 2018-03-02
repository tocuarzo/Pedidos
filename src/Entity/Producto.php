<?php
/**
 * Created by PhpStorm.
 * User: serch
 * Date: 20/02/2018
 * Time: 20:01
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Producto
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="Productos")
 *
 */

class Producto
{
    /**
     * @var
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer", length=5)
     */
    private $cod_prod;

    /**
     * @var
     * @ORM\Column(type="text", length=40)
     */
    private $nombre;
    /**
     * @var
     * @ORM\Column(type="integer", length=5)
     */
    private $stock;
    /**
     * @var
     * @ORM\Column(type="integer", length=4)
     */
    private $precio;
    /**
     *
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="productos")
     * @ORM\JoinColumn(name="categoria", referencedColumnName="cod_cat")
     */
    private $categoria;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getCod_Prod()
    {
        return $this->cod_prod;
    }
    public function setCod_Prod($cod_prod){
        $this->cod_prod = $cod_prod;
    }
    public function __get($nombre){
        return $this->cod_prod;
    }
    public function __toString()
    {
        return $this->nombre;
    }

}