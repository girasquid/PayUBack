<?php

namespace Ekoed\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => "22123");
    }

    /**
     * @Route("/waasa")
     * @Template()
     */
    public function addContactAction()
    {
		//if user exists, make iou, else make user and then make it
		$request = $this->container->get('request');    
	 	$em = $this->getDoctrine()->getManager();
	 	//if email format, look for email, else look for username
	 	if($request->request->get('format')=="email") {
			//look for the username
			$query = $em->createQuery(
			    'SELECT u
			    FROM EkoedUserBundle:user u
			    WHERE u.email = :email '
			)->setParameter('email', $request->request->get('contact'));
				
			$recipient = $query->getResult();
			//if found, add contact notifier, else ??????
		 	if(!$recipient) {
		 		$response = array("Status" => 100, "Data" => "confirm");
		 		return new Response(json_encode($response)); 
		 	} else {
			 	    //prepare the response, 
			        $response = array("Status" => 100, "Data" => "ADDED");
			        //you can return result as JSON
			    	return new Response(json_encode($response)); 
			}
	 	} else {
	 		//look for username, if found send notifier
			$query = $em->createQuery(
			    'SELECT u
			    FROM EkoedUserBundle:user u
			    WHERE u.username = :username '
			)->setParameter('username', $request->request->get('contact'));
			
			$recipient = $query->getResult();
		 	if(!$recipient) {
		 		
		 		$response = array("Status" => 100, "Data" => "confirm");
		 		return new Response(json_encode($response)); 
		 	} else {
			 	    //prepare the response, 
			        $response = array("Status" => 100, "Data" => "ADDED");
			        //you can return result as JSON
			    	return new Response(json_encode($response)); 
			}

		}
	}   

}
