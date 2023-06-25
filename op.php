<?php
 
require_once("rest/dao/vehiclesDao.class.php");
$vehicles_dao = new VehiclesDao();

$type=$_REQUEST['type'];

switch($type){
    case 'add':
        $mark= $_REQUEST['mark'];
        $model= $_REQUEST['model'];
        
        
        $results  = $vehicles_dao->add_vehicle($model,$mark);
        print_r($results); 
        break;

        case 'update':
            $mark = $_REQUEST['mark'];
            $model = $_REQUEST['model'];
            $id = $_REQUEST['id'];
            $vehicles_dao->update_vehicle($model,$mark,$id);
            break;

            case 'delete':
                $id= $_REQUEST['id'];
                $vehicles_dao->delete_vehicle($id);  
                break;

                case 'get ': 

                    default:
                        $results = $vehicles_dao->get_all();
                        print_r($results);
                        break;  
}

?>