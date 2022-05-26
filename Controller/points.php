<?php
if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
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

function insertPoint($coordenadas,$nombre,$img,$descripcion)
{
    $db = Conexion::getConnection();
    $query_point = "INSERT INTO `points` (`id`, `coordenadas`, `nombre`, `img`, `descripcion`) VALUES (NULL, '$coordenadas', '$nombre', '$img', '$descripcion');";
    echo ($query_point);
    $db->query($query_point);
}
if (isset($_POST['nuevo_punto'])) {
    insertPoint($_POST["coordenadas"], $_POST["nombre"], $_POST["img"],$_POST["descripcion"]);
    header("Location:" . VIEWS_PATH . "admin/mapsAdmin.php");
}
?>