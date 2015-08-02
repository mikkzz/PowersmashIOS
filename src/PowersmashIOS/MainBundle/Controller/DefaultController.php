<?php

namespace PowersmashIOS\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PowersmashIOSMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
