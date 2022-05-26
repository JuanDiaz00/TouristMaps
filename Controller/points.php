<?php
if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "conexion.php");


function getAllPoints(){
    $db = Conexion::getConnection();
    $query_points = "SELECT * FROM points";
    $result = $db->query($query_points);
    if($result->num_rows > 0){
        return $result;
    }
}
?>