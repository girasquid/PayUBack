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
	public function createIOUAction(){
			$request = $this->container->get('request');    

			$em = $this->getDoctrine()->getManager();
	 		$IOU = new IOU();
	 		// $IOU->setOwer($request->request->get("ower"));
	 		// $IOU->setOwee($request->request->get("owee"));
	 		$IOU->setDateAdded(new \DateTime());
	 		$IOU->setUnits($request->request->get("unit"));
	 		$IOU->setDateDue(new \DateTime());
	 		$IOU->setType(1);
	 		$IOU->setAmount($request->request->get("amount"));
	 		$IOU->setDescription($request->request->get("description"));
	 		$IOU->setAutocalcOverride(1);
	 		$em->persist($IOU);
	        $em->flush();
	 	        //prepare the response, e.g.
	        $response = array("Status" => 100, "Data" => "ADDED");
	        //you can return result as JSON
	    	return new Response(json_encode($response)); 
	}   

}
