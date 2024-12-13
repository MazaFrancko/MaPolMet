<?php
session_start();
// Comprobar si ya hay una sesión activa
if (!isset($_SESSION['loggedin'])) {
    // Si no está logueado, asignar el rol predeterminado "usuario"
    $_SESSION['rol'] = 'usuario';
    $_SESSION['loggedin'] = true;  // Marcamos como "logueado" de manera predeterminada
    $_SESSION['Usuario'] = 'Invitado'; // Nombre de usuario predeterminado
}

// El rol de usuario ahora está asignado por defecto
?>