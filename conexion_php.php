<?php
$servidor = "localhost";
$nombreusuario = "root";
$password = "root";
$db = "doctores_danna";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
    echo "conectado ";
}
?>