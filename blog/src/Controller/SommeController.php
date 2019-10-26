<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SommeController extends AbstractController
{

    public function index($a,$b)
    {
        $s=$a+$b;
        return $this->render('somme/index.html.twig', [
            's' => $s,'a'=> $a,'b'=> $b,
        ]);
    }
}
