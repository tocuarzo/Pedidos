<?php
/**
 * Created by PhpStorm.
 * User: serch
 * Date: 12/02/2018
 * Time: 19:31
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Form\RegistroType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Usuario;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class Login extends Controller {
    /**
     * @Route("/", name="redirect")
     */
    public function redirigir(){
        return $this->redirectToRoute("login");
    }
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
            if ($this->getUser() != null) return $this->redirectToRoute("principal");
            $error = $authUtils->getLastAuthenticationError();

            // last username entered by the user
            $lastUsername = $authUtils->getLastUsername();
            return $this->render("login/login.html.twig", array("error" => $error, "lastuser" => $lastUsername));
    }
    /**
     * @Route("/registro", name="registro")
     *
     */
    public function Registro(Request $request){
        $usuario = new Usuario();
        $formularioRegistro = $this->createForm(RegistroType::class, $usuario);
        $formularioRegistro->handleRequest($request);
        if ($formularioRegistro->isSubmitted() && $formularioRegistro->isValid()){ //los campos se verifican en cliente y en servidor
            $usuario = $formularioRegistro->getData();
            $usuario->setAdmin(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
            return $this->redirectToRoute("login");
        }
        return $this->render("/login/Registro.html.twig", array("form" => $formularioRegistro->createView()));
    }
    /**
     * @Route("/jsontest", name="json")
     */
    public function jsontest(SessionInterface $session){

    }
}

?>