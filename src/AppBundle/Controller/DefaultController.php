<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
      return $this->render('AppBundle:Home:index.html.twig');
    }

    /**
     * @Route("/about_us", name="about_us")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
      return $this->render('AppBundle:Home:about_us.html.twig');
    }
}
