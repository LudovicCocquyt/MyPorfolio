<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;





class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index_page")
     */
    public function home()
    {

    	return $this->render('home.html.twig');
	}
}