<?php

define('CONTROLLER_PATH', '../Controllers/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('LIBRARIES_PATH', '../libraries/');

require_once(LIBRARIES_PATH."Conexion.php");
$db = Conexion::getConnection();
$query = "SELECT * FROM usuarios WHERE correo='".$_POST["correo"]."' and pasword='".$_POST["password"]."'";
$result = $db->query($query);
if ($result->num_rows > 0) {
    //echo "Datos Correctos";
    while ($row = mysqli_fetch_assoc($result)) {
            header("Location:".VIEWS_PATH."maps.php");
    }
    //header("Location:".VIEWS_PATH."home_user.php");
} else {
    //echo "Datos Incorrectos";
    header("Location:".VIEWS_PATH."index.php?info=1");
}
?>