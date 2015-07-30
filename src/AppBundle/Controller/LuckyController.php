<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class LuckyController
{
    /**
     * @Route("/")
     */
    public function numberAction()
    {
	$data = array();
	$data['bobo1']  = "James Yap";
	$data['bobo2'] = "Karl Seth Nerva";
	$data['bobo3'] = "Dhan  Dan";
	$data['bobo4'] = "Christian Perez";
	$data['bobo5'] = "James Nohara";
	$data['bobo6'] = "Adrian Paul";
        return new JsonResponse($data);
    }
}
