<?php 

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\JsonResponse;

use BackendBundle\Entity\Contacto;


class ContactoController extends Controller{

	public function listAction(Request $request){

		$helpers = $this->get("app.helpers");

		$em = $this->getDoctrine()->getManager();

		$dql = "SELECT c FROM BackendBundle:Contacto c ORDER BY c.id DESC";
			$query = $em->createQuery($dql);

		//Recogemos el numero de la paginación
		$page = $request->query->getInt("page", 1);
		$paginator = $this->get("knp_paginator");
		$items_per_page = 6;

		$pagination = $paginator->paginate($query, $page, $items_per_page);
		$total_items_count = $pagination->getTotalItemCount();

		$data = array(
			"status" 			=> "sucess",
			"total_items_count" => $total_items_count,
			"page_actual" 		=> $page,
			"items_per_page"	=> $items_per_page,
			"total_pages" 		=> ceil($total_items_count / $items_per_page),
			"data"				=> $pagination 
		);

		return $helpers->json($data);

	}

}