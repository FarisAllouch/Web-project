<?php
 
require_once("rest/dao/vehiclesDao.class.php");
$vehicles_dao = new VehiclesDao();

$results = $vehicles_dao->get_all();
print_r($results);

/* $servername = "localhost";
$username = "root";
$password = "palestine";
$schema = "web-project";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    $stmt = $conn->prepare("SELECT * FROM vehicles");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);



  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
*/
?>

