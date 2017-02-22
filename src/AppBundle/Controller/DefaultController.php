<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

     /**
     * @Route("/login", name="login")
     * @Method({"POST"})
     */
    public function loginAction(Request $request){

        $helpers = $this->get("app.helpers");
        $jwt_auth = $this->get("app.jwt_auth");

        //Recibimos el json
        $json = $request->get("json", null);

        if($json != null){
            $params = json_decode($json);

            $email = (isset($params->email)) ? $params->email : null;
            $password = (isset($params->password)) ? $params->password : null;
            $gethash = (isset($params->gethash)) ? $params->gethash : null;

            $emailContraint = new Assert\Email();
            $emailContraint->message = "This email is not valid !!";

            $validate_email = $this->get("validator")->validate($email, $emailContraint);

            //Ciframos la contraseña
            $pwd = hash('sha256', $password);

            if(count($validate_email) == 0 && $password != null){

                if ($gethash == null) {
                    $signup = $jwt_auth->signup($email, $pwd);
                }else{
                    $signup = $jwt_auth->signup($email, $pwd, "hash");
                }

                return new JsonResponse($signup);
            }else{
                return $helpers->json(
                    array(
                        "status"    => "error",
                        "data"      => "Login not valid !"
                    )
                );
            }

        }else{
            return $helpers->json(
                    array(
                        "status"    => "error",
                        "data"      => "Send json with post!"
                    )
                );
        }

        die();


    }


    /**
     * @Route("/pruebas", name="pruebas")
     * @Method({"GET","POST"})
     */
    public function pruebasAction(Request $request)
    {
        $helpers = $this->get('app.helpers');

        $hash = $request->get("authorization", null);
        $check = $helpers->authCheck($hash);

        var_dump($check);
        die();

        /*$em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("BackendBundle:User")->findAll();*/
     

        return $helpers->json($users);
    }


}
