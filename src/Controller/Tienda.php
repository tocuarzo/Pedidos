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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route as Ruta;

    /**
     * @Ruta("/principal")
     */
class Tienda extends Controller {
    /**
     *  Estructura del carrito:
     *
     *  $carrito = objeto tipo carrito
     */
    /**
     * @Ruta("/", name="principal")
     */

    public function menuPrincipal(Request $request, SessionInterface $session){
        $em = $this->getDoctrine()->getManager();
        if (null === $session->get("carrito")){
            $carrito = new Carrito();
            $session->set("carrito", $carrito);
        } else $carrito = $session->get("carrito");
            $productos = $em->getRepository(Producto::class)->findAll();
            if ($request->request->has('cantidad') && $request->request->has('id')) {
                $uds = $request->request->get("cantidad");
                $id = $request->request->get("id");
                $producto = $em->getRepository(Producto::class)->find($id);
                $carrito->addItem(array("producto" => $producto, "uds" => $uds));
                $session->set("carrito", $carrito);
                return $this->redirectToRoute("carrito");
            }
        return $this->render("tienda/tienda.html.twig", array("user" => $this->getUser()->getUsername(), "productos" => $productos));
    }
    /**
     * @Ruta("/carrito", name="carrito")
     */
    public function carrito(SessionInterface $session, Request $request){
        $carrito = $session->get("carrito");
        if ($request->request->has('id')) {
            $id = $request->request->get("id");
            $carrito->removeItem($id);
            $session->set("carrito", $carrito);
        }
        dump($carrito);
        return $this->render("tienda/carrito.html.twig", array("carrito" => $carrito->getItems()));
    }
    /**
     * @Ruta("/procesarCarrito", name="procesar")
     */
    public function procesar(SessionInterface $session){
        $carrito = $session->get("carrito");
        return $this->json($carrito->getItems());
    }
}

class Carrito {
    private $items;

    /**
     * @return mixed
     */
    public function __construct(){
        $this->items = [];
    }

    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     */
    public function addItem($item)
    {
        foreach ($this->items as $i => $articulo){
            if ($articulo["producto"]->getCod_prod() == $item["producto"]->getCod_prod()){
                $this->items[$i]["uds"] += $item["uds"];
                return;
            }
        }
        $this->items[] = $item;
    }
    public function removeItem($id){
        foreach ($this->items as $i => $articulo){
            if ($articulo["producto"]->getCod_prod() == $id){
                unset($this->items[$i]);
                return;
            }
        }
    }


}