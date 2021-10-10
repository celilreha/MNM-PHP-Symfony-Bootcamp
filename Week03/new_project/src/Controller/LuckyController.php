<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
      * @Route("/lucky/number")
      */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
    /**
      * @Route("/lucky/number/{max}")
      */
      public function numbers(int $max)
      {
          $number = $max;
  
          return $this->render('lucky/number.html.twig', [
              'number' => $number,
          ]);
      }
}