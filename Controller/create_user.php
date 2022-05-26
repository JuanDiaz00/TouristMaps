<?php

define('CONTROLLER_PATH', '../Controllers/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('LIBRARIES_PATH', '../libraries/');



require_once(LIBRARIES_PATH."Conexion.php");

function newUsuario($correo,$nombre,$password, $apellido, $nikname,){
    $db = Conexion::getConnection();   
    $query = "INSERT INTO `usuarios` (`correo`, `nombre`, `pasword`, `apellido`, `nickName`, `rol`) VALUES ('$correo', '$nombre', '$password', '$apellido', '$nikname', '1');";
    $db->query($query);
}

if (isset($_POST['nuevoUsuario'])) {
    newUsuario($_POST["email"], $_POST["nombre"], $_POST["password"], $_POST["apellido"], $_POST["nikname"]);
    header("Location:".VIEWS_PATH."index.php");
}
?>