<?php

namespace Ekoed\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Ekoed\UserBundle\Entity\User as User;
class UserController extends Controller
{

    public function addContactAction()
    {

    	$response=array("status"=>"success","reason"=>"");
    	return new Response(json_encode($response)); 
    }
}
