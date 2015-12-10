<?php
namespace Resource\EquipmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormController extends Controller
{
    public function addAction()
    {
        return $this->render('ResourceEquipmentBundle:Forms:Add_equipment_form.html.twig');
    }
}
