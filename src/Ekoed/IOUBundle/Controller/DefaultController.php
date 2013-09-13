<?php

namespace Ekoed\IOUBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Ekoed\IOUBundle\Entity\IOU as IOU;

class DefaultController extends Controller
{
 
 	/**
     * @Route("/iou/create")
     * @Method({"POST"})
     * @Template()
     */
	public function createIOUAction()
	{
			//if user exists, make iou, else make user and then make it

			$request = $this->container->get('request');    
	 		$em = $this->getDoctrine()->getManager();

	 		//look for the username
			$query = $em->createQuery(
			    'SELECT u
			    FROM EkoedUserBundle:user u
			    WHERE u.name = :name '
			)->setParameter('name', $request->request->get('owee'));

			$recipient = $query->getResult();

	 		if(!$recipient){

	 			$response = array("Status" => 100, "Data" => "confirm");
	 			return new Response(json_encode($response)); 
	 		}else{
			 		$IOU = new IOU();

			 		// $IOU->setOwer($request->request->get("ower"));
			 		// $IOU->setOwee($request->request->get("owee"));
			 		$IOU->setDateAdded(new \DateTime());
			 		$IOU->setUnits($request->request->get("unit"));
			 		$IOU->setDateDue(new \DateTime($request->request->get("dueDate")));
			 		$IOU->setType(1);
			 		$IOU->setAmount($request->request->get("amount"));
			 		$IOU->setDescription($request->request->get("description"));
			 		$IOU->setAutocalcOverride(1);
			 		$em->persist($IOU);
			        $em->flush();
			 	        //prepare the response, 
			        $response = array("Status" => 100, "Data" => "ADDED");
			        //you can return result as JSON
			    	return new Response(json_encode($response)); 

	 		}

	} 

	/**
	 * @Route("/iou/edit")
	 * @Template()
	 */  
	public function editIOUAction()
	{
		return new Response("Hello World");
	}

	/**
	 * @Route("/iou/remove")
	 * @Template()
	 */
	public function removeIOUAction()
	{
		return new Response("Hello World");
	}

}
