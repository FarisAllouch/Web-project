<?php
require_once("rest/dao/vehiclesDao.class.php");
$vehicles_dao=new VehiclesDao();
    $mark= $_REQUEST['mark'];
    $model= $_REQUEST['model'];
    
    $results=$vehicles_dao->add_vehicle($model,$mark);
    print_r($results); 

/*
$servername = "localhost";
$username = "root";
$password = "palestine";
$schema = "web-project";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    //print_r($_REQUEST);

   

 



  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  */
?>
