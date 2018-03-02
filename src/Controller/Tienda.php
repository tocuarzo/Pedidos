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
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route as Ruta;

    /**
     * @Ruta("/principal")
     */
class Tienda extends Controller {
    /**
     * @Ruta("/", name="principal")
     */
    public function menuPrincipal(Request $request, SessionInterface $session){
        $formulariobuilder = $this->createFormBuilder(null);
        $formulario = $formulariobuilder->add("cantidad", IntegerType::class)
            ->add("submit", SubmitType::class, array('label' => 'Añadir al carrito'))->getForm();
        $formulario->handleRequest($request);
       if (!$session->get("carrito")){
           $carrito = [];
           $session->set("carrito", $carrito);
       }
        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository(Producto::class)->findAll();
       return $this->render("tienda/tienda.html.twig", array("user" => $this->getUser()->getUsername(), "productos" => $productos, "form" => $formulario->createView()));
    }
    /**
     * @Ruta("/addCarrito/{id}/{cantidad}", name="addCarrito")
     */
    public function addCarrito($id, $cantidad, SessionInterface $session){
        /**
         *  Estructura del carrito:
         *
         *  $carrito = array de $item,
         *  $item = array de 2 valores, valor 1 = objeto producto, valor 2, cantidad
         *
         *
         */
        $carrito = $session->get("carrito");
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository(Producto::class)->find($id);
        $uds = $cantidad;
        $item = array("producto" => $producto, "unidades"=>$uds);
        $carrito[] = $item;
        $session->set("carrito", $carrito);
        return $this->redirectToRoute("carrito");
    }
    /**
     * @Ruta("/deleteCarrito", name="deleteCarrito")
     */
    public function deleteCarrito(Request $request, SessionInterface $session){
        $carrito = $session->get("carrito");
        foreach ($carrito as $i => $item){
            if ($id == $item["producto"]->getCod_Prod()){
                if($cantidad >= $item["cantidad"]) unset($carrito[$i]);
                else $carrito[$i] =- $cantidad;
            }
        }
        $session->set("carrito", $carrito);
        return $this->redirectToRoute('carrito');
    }

    /**
     * @Ruta("/carrito", name="carrito")
     */
    public function carrito(SessionInterface $session){
        $carrito = $session->get("carrito");
        return $this->render("tienda/carrito.html.twig", array("carrito" => $carrito));
    }
}