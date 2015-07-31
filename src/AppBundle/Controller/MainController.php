<?php
//src/AppBundle/Controller/MainController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
	/**
	* @Route("/");
	*/
	public function indexAction()
	{
	return new Response(
		"<html><body>Index</body></html>"
		);
	}
}
