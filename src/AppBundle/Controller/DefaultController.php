<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $a = "Oleg";
        return $this->render('default/feedback.html.twig', ["a" => $a]);
    }
    /**
     * @Route("/feedback", name="feedback")
     */
    public function feedbackAction(){
        return $this->render('default/feedback.html.twig');
    }
}
