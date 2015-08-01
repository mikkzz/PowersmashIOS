<?php

namespace PowersmashIOS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PowersmashIOSAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
