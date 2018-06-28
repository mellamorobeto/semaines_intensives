<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlaneteController extends Controller
{
    /**
     * @Route("/planete", name="planete")
     */
    public function index()
    {
        return $this->render('planete/index.html.twig', [
            'controller_name' => 'PlaneteController',
        ]);
    }
}
