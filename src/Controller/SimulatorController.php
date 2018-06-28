<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SimulatorController extends Controller
{
    /**
     * @Route("/simulator", name="simulator")
     */
    public function index()
    {
        return $this->render('simulator/index.html.twig', [
            'controller_name' => 'SimulatorController',
        ]);
    }
}
