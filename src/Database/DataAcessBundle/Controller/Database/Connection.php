<?php
/**
 * Created by PhpStorm.
 * User: Dimuth Tharaka
 * Date: 11/12/15
 * Time: 4:42 AM
 */
namespace Database\DataAcessBundle\Controller;



/**
 * Singleton class
 *
 */
final class Connection
{

    public static function getConnection()
    {
        static $conn = null;
        if ($conn === null) {
            $conn = new UserFactory();
        }
        return $conn;
    }


    private function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = null;
        $dbname = "moraspirit";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
}
?>