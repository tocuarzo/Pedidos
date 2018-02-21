<?php
/**
 * Created by PhpStorm.
 * User: serch
 * Date: 20/02/2018
 * Time: 20:08
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Categoria
 * @package App\Entity
 * @ORM\Table(name="Categorias")
 * @ORM\Entity
 */
class Categoria {
    /**
     * @var $cod_cat
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $cod_cat;

    /**
     * @return mixed
     */
    /**
     * @var
     * @ORM\Column(type="text")
     */
    private $nombre;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Producto", mappedBy="categoria")
     */
    private $productos;

    public function __construct()
    {
        $this->productos = new ArrayCollection();
    }
    public function getCodCat()
    {
        return $this->cod_cat;
    }

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
     * @return ArrayCollection
     */
    public function getProductos(): ArrayCollection
    {
        return $this->productos;
    }
}