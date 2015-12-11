<?php

namespace Database\DataAcessBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DatabaseDataAcessBundle:Default:index.html.twig');
    }
}
