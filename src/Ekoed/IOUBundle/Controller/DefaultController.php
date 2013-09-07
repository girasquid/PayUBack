<?php

namespace Ekoed\IOUBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
 
 public function CreateIOUAction(){

 	        //prepare the response, e.g.
        $response = array("Status" => 100, "Data" => $output);
        //you can return result as JSON
        return new Response(json_encode($response)); 
 }   

}
