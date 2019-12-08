<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\These;
use App\Entity\Ecole;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/theses", name="thes")
     * @Method ({"GET"})
     */
    public function these()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $thesess = $this->getDoctrine()->getRepository(These::class)->findAll();
        return $this->render('main/listedestheses.html.twig', array('thesess' => $thesess));
            
    }
     /**
     * @Route("/ecoles", name="ecol")
     * @Method ({"GET"})
     */
    public function ecole()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $ecoles = $this->getDoctrine()->getRepository(Ecole::class)->findAll();
        return $this->render('main/listeecoles.html.twig', array('ecoles' => $ecoles));
            
    }

    
}
