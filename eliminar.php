<?php
include("ConexionReservas.php"); // Conexión a la base de datos

// Verificar si se recibió un nombre válido
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"])) {
    $nombreReserva = $_GET["nombre"]; // Obtenemos el nombre de la reserva

    // Preparar la consulta para eliminar la reserva
    $sqlEliminar = "DELETE FROM `datos_de_reservas` WHERE Nombre = ?";
    $stmt = $conexion->prepare($sqlEliminar);
    $stmt->bind_param("s", $nombreReserva);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "<script>alert('Reserva eliminada correctamente'); window.location.href = 'Reservas.php';</script>";
    } else {
        echo "<script>alert('Error al eliminar la reserva'); window.location.href = 'Reservas.php';</script>";
    }

    $stmt->close();
} else {
    // Redirigir si no hay nombre o el método no es GET
    echo "<script>alert('Acceso no válido'); window.location.href = 'index.php';</script>";
}
$conexion->close();
?>
