<?php
/**
 * Created by PhpStorm.
 * User: serch
 * Date: 22/02/2018
 * Time: 17:13
 */

namespace App\Controller;


use App\Entity\Producto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route as Ruta;

    /**
     * @Ruta("/principal")
     */
class Tienda extends Controller {
    /**
     * @Ruta("/", name="principal")
     */
    public function menuPrincipal(SessionInterface $session){
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository(Producto::class)->findAll();
       return $this->render("tienda/tienda.html.twig", array("user" => $this->getUser()->getUsername(), "productos" => $productos));
    }
    /**
     * @Ruta("/addCarrito/{item_id}/{cantidad}", name="addCarrito")
     */
    public function addCarrito($id, $cantidad, SessionInterface $session){
        $em = $this->getDoctrine()->getManager();
        if(!$carrito = $session->get("carrito")){
            $item["producto"] = $em->getRepository(Producto::class)->find($id);
            $item["cantidad"] = $cantidad;
            $carrito[] = $item;
            $session->set("carrito", $carrito);
        } else {
            $item["producto"] = $em->getRepository(Producto::class)->find($id);
            $item["cantidad"] = $cantidad;
            $carrito[] = $item;
            $session->set("carrito", $carrito);
        }
        return $this->redirectToRoute("carrito");
    }

    /**
     * @Ruta("/carrito", name="carrito")
     */
    public function carrito(SessionInterface $session){
        $carrito = $session->get("carrito");
        return $this->render("tienda/carrito.html.twig", array("carrito" => $carrito));
    }
}