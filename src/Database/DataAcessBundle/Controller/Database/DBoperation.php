<?php
/**
 * Created by PhpStorm.
 * User: Dimuth Tharaka
 * Date: 11/12/15
 * Time: 5:23 AM
 */
namespace Database\DataAcessBundle\Controller;
use Database\DataAcessBundle\Controller\Connection;
use  Resource\DataAcessBundle\Resources\equipment;
class DBOperation{
    public static function saveToEquipment(equipment $eqpm)
    {
        $conn = Connection::getConnection();
        $r_id = $eqpm->getResource_id();
        $s_id = $eqpm->getSupplier_id();
        $sql = "INSERT INTO resources VALUES ( '$r_id'  , '$s_id' ) ";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


    }
}