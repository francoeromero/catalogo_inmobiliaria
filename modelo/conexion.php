<?php 
// Conexion ala base de datos
// servidor LOCALHOST
// usuario root
// contraseña no hay
// nombre de la base de datos creada en mysql
// numero de puerto si tienes 
$host = "sql300.infinityfree.com";
$user = "if0_38556297";
$pass = "RsmRvWrv4ab3Ttk";
$db = "if0_38556297_inmobiliaria";

// conexion con el hosting segun las variables del servido
// $conexion = new mysqli($host, $user, $pass, $db);
// conexion con XAMP 
$conexion = new mysqli("localhost","root","","crud_imagenes");
$conexion->set_charset("utf8");
date_default_timezone_set("America/Argentina/Buenos_Aires");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>

