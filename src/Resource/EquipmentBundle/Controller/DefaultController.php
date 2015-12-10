<?php

namespace Resource\EquipmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ResourceEquipmentBundle:Default:index.html.twig');
    }
}
