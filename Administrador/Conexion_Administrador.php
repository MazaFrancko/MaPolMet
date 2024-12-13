<?php
// Configuración para conectar con la base de datos
$servidor = "localhost"; // Cambiar si es diferente
$usuario_bd = "root";    // Cambiar por tu usuario de base de datos
$contraseña_bd = "";     // Cambiar por tu contraseña de base de datos
$nombre_bd = "administrador"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servidor, $usuario_bd, $contraseña_bd, $nombre_bd);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
?>
