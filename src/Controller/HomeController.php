<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ParcoursRepository;
use App\Repository\UserRepository;
use App\Repository\ProjetRepository;



class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index_page")
     */
    public function home(ParcoursRepository $parcoursRepository, UserRepository $userRepository, ProjetRepository $projetRepository)
    {

    	return $this->render('home.html.twig',[
            'parcours' => $parcoursRepository->findAll(),
            'projets' => $projetRepository->findAll(),
            'users' => $userRepository->findAll(),
        ]);
	}
}