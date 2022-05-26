<?php


if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH."Conexion.php");

function getOneUser($correo)
{
    $db = Conexion::getConnection();
    //if (isset($_GET["all"])) {
    //  if ($_GET["all"] == 1) {
    $query_cantantes = "SELECT * FROM usuarios WHERE correo=" . $correo;
    $result = $db->query($query_cantantes);
    if ($result->num_rows > 0) {
        return $result;
    }
}

function newUsuario($correo,$nombre,$password, $apellido, $nikname){
    $db = Conexion::getConnection();   
    $query_usuarios = "INSERT INTO `usuarios` (`correo`, `nombre`, `pasword`, `apellido`, `nickName`, `rol`) VALUES ('$correo', '$nombre', '$password', '$apellido', '$nikname', 1);";
    echo ($query_usuarios);
    $db->query($query_usuarios);
}

if (isset($_POST['nuevo_Usuario'])) {
    newUsuario($_POST["email"], $_POST["nombre"], $_POST["password"], $_POST["apellido"], $_POST["nikname"]);
    header("Location:".VIEWS_PATH."index.php");
}

