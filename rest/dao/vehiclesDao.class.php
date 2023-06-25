<?php



class VehiclesDao{

    private $conn;

   
    public function __construct(){
        try {
        $servername = "localhost";
        $username = "root";
        $password = "palestine";
        $schema = "vehicleselling";
        $this->conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);  
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
        
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    }
    public function get_all(){
        $stmt = $this->conn->prepare("SELECT * FROM vehicles");
        $stmt->execute();
        return $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

    public function add_vehicle($mark,$model){
   $stmt = $this->conn->prepare("INSERT INTO vehicles  (mark, model) VALUES ('$mark', '$model')");
        return $result = $stmt->execute();

    }

    public function update_vehicle($mark,$model,$id){
            $stmt = $this->conn->prepare("UPDATE vehicles SET mark='$mark', model='$model' WHERE id = $id");
              $stmt->execute();
     
         }

    public function delete_vehicle($id){
            $stmt = $this->conn->prepare("DELETE FROM vehicles WHERE id = :id");
            $stmt ->bindParam(':id',$id); 
            $stmt->execute();
         
             }
}


?>