<?php
include "Conexion_Administrador.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btningresar"])) {
    $usuario = trim($_POST["usuario"]);
    $password = trim($_POST["password"]);

    // Consulta para verificar credenciales y recuperar el nombre completo
    $sql = "SELECT Nombre_Completo, Contraseña FROM datos_del_administrador WHERE Usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();

        // Verificar contraseña
        if ($password === $fila['Contraseña']) {
            // Guardar datos en la sesión
            $_SESSION['usuario'] = $usuario; // Guardar el usuario
            $_SESSION['nombre_completo'] = $fila['Nombre_Completo']; // Guardar el nombre completo
            header("Location: panel.php"); // Redirigir al panel
            exit();
        } else {
            echo "<script>
                    alert('Contraseña incorrecta.');
                    window.location.href = 'login.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Usuario no encontrado.');
                window.location.href = 'login.php';
              </script>";
    }

    // Cerrar la consulta y la conexión
    $stmt->close();
    $conn->close();
}
?>
