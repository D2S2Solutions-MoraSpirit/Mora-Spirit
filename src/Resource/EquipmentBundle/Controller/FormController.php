<?php
namespace Resource\EquipmentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Database\DataAcessBundle\Controller\DBOperation;
use DataAcessBundle\Resources\Entities\equipment as eqp;
class FormController extends Controller
{
    public function addAction()
    {
        return $this->render('ResourceEquipmentBundle:Forms:Add_equipment_form.html.twig');
    }
    public function saveEquipmentAction()
    {
        $eqpm = new eqp();
        $eqpm->setResource_id($_POST["rid"]);
        $eqpm->setResource_id($_POST["sid"]);
        DBoperation::saveToEquipment($eqpm);



        return $this->render('ResourceEquipmentBundle:Default:index.html.twig');
    }
}
