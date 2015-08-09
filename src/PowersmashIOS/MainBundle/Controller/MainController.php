<?php

namespace PowersmashIOS\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
  /**
   * Shows the static index page for the website Powersmash
   * @return HTML static
   */
  public function indexAction()
  {

    return $this->render('PowersmashIOSMainBundle:Static:index.html.twig');

  }

}
