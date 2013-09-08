<?php

namespace Ekoed\IOUBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IOUController extends Controller
{
 
 public function CreateIOUAction(){
 		$em = $this->getDoctrine()->getManager();
 		$IOU=new IOU();
 		$IOU->setDateAdded("09/24/2013");
 		$IOU->setType("liter");
 		$IOU->setAmount("100");
 		$IOU->setDescription("wat");
 		$IOU->setAutocalcOverride(1);
 		$em->persist($IOU);
        $em->flush();
 	        //prepare the response, e.g.
        $response = array("Status" => 100, "Data" => $output);
        //you can return result as JSON
        return new Response(json_encode($response)); 
 }   

}
