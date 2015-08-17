<?php

namespace PowersmashIOS\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{

  public function indexAction()
  {
    return $this->render('PowersmashIOSMainBundle:Static:index.html.twig');
  }

  public function aboutAction()
  {
    return $this->render('PowersmashIOSMainBundle:Static:about.html.twig');
  }

  public function contactAction()
  {
    return $this->render('PowersmashIOSMainBundle:Static:contact.html.twig');
  }

  public function loginAction()
  {
    return $this->render('PowersmashIOSMainBundle:Static:login.html.twig');
  }

  public function registerAction()
  {
    return $this->render('PowersmashIOSMainBundle:Static:register.html.twig');
  }

}
