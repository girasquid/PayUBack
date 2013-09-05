<?php

namespace Ekoed\IOUBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UserProfileController extends Controller
{
    /**
     * @Route("/user")
     * @Template()
     */
    public function LoadProfileAction()
    {
        return array('name' => "22123");
    }
}
