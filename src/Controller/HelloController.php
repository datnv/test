<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends Controller
{

    /**
     * @Route("/blog/test", name="blog_test")
     */
    public function testAction()
    {


        $arr = [1, 2, 3,4];
        return $this->render('blog/test.html.twig', ["arr" => $arr]);


    }


}