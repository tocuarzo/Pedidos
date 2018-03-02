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
     * @ORM\OneToMany(targetEntity="Producto", mappedBy="categoria")
     */
    private $productos;

    public function __construct()
    {
        $this->productos = new ArrayCollection();
    }

    public function setcod_cat($cod_cat)
    {
        $this->cod_cat = $cod_cat;
    }

    public function __get($nombre){
        if ($nombre == "cod_cat") return $this->cod_cat;
        if ($nombre == "nombre") return $this->nombre;
    }
    public function getcod_cat() {
        $cod_cat = $this->cod_cat;
        return $cod_cat;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getProductos()
    {
        return $this->productos;
    }

    public function __toString()
    {
       return $this->nombre;
    }


}