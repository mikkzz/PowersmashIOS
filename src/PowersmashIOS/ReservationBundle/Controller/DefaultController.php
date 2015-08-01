<?php

namespace PowersmashIOS\ReservationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PowersmashIOSReservationBundle:Default:index.html.twig', array('name' => $name));
    }
}
