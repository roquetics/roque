<?php

namespace principal\miBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('miBundle:Default:index.html.twig');
    }
    public function LoginAction()
    {
        return $this->render('miBundle:Default:Login.html.twig');
    }
}
