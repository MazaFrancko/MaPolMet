<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    echo "<script>
            alert('Debes iniciar sesión para acceder a esta página.');
            window.location.href = 'login.php';
          </script>";
    exit();
}
?>
