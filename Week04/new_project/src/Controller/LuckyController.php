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
        $users = array((object)['name'=>"Celil",'number'=>random_int(0, 100)],(object)['name'=>"Reha",'number'=>random_int(0, 100)],(object)['name'=>"Esgice",'number'=>random_int(0, 100)]);
        return $this->render('lucky/number.html.twig',[
            'users' => $users,
        ]);
    }
    /**
      * @Route("/lucky/number/{max}")
      */
      public function numbers(int $max)
      {
          $number = $max;
          $users = array((object)['name'=>"Celil",'number'=>$max],(object)['name'=>"Reha",'number'=>$max],(object)['name'=>"Esgice",'number'=>$max]);
          return $this->render('lucky/number.html.twig', [
              'users' => $users,
          ]);
      }
}