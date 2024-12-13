<?php
// Conectar a la base de datos 'mapolmet_db'
$conexion = new mysqli("localhost", "root", "", "mapolmetequipamientos");
// Comprobar si hay errores en la conexión
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}
?>
