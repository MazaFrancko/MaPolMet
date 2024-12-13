<?php
include("conexion.php");

// Asegúrate de que la zona horaria esté configurada correctamente
date_default_timezone_set('America/Argentina/Buenos_Aires'); // Ajusta según tu zona

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre_producto = $_POST['nombre_producto'];
    $imagen_producto_base64 = $_POST['imagen_producto']; // Imagen del producto
    $precio = $_POST['precio'];
    $nombre_completo = $_POST['nombre_completo'];
    $numero_contacto = $_POST['numero_contacto'];
    $indicaciones = $_POST['indicaciones'];
    $imagen_color_base64 = $_POST['imagen_color_seleccionado']; // Imagen del color seleccionado
    
    // Registrar la fecha y hora actuales del servidor
    $fecha_reserva = date("Y-m-d H:i:s");  // Fecha en formato DATETIME

    // Depuración: Verificar el valor de la fecha antes de continuar
    var_dump($fecha_reserva);  // Imprime el valor de la fecha para depurar

    // Convertir las imágenes de base64 a binarios
    $imagen_producto_binario = base64_decode(str_replace('data:image/jpeg;base64,', '', $imagen_producto_base64));
    $imagen_color_binario = base64_decode(str_replace('data:image/jpeg;base64,', '', $imagen_color_base64));

    // Validar que se haya recibido la imagen del color
    if (empty($imagen_color_binario)) {
        die("Error: No se recibió una imagen válida para el color seleccionado.");
    }

    // Validar que se haya recibido la imagen del producto
    if (empty($imagen_producto_binario)) {
        die("Error: No se recibió una imagen válida para el producto.");
    }

    // Insertar los datos en la tabla 'datos_de_reservas'
    $query_reserva = "INSERT INTO datos_de_reservas (Nombre, Contacto, Imagenes, Color, Precio, Fecha, Indicaciones, nombre_de_contacto)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt_reserva = $conexion->prepare($query_reserva);

    // Bind de parámetros (inicialmente para los tipos no binarios)
    $stmt_reserva->bind_param("sssbdbss", $nombre_producto, $numero_contacto, $imagen_producto_binario, $imagen_color_binario, $precio, $fecha_reserva, $indicaciones, $nombre_completo);

    // Enviar las imágenes de manera separada
    $stmt_reserva->send_long_data(2, $imagen_producto_binario); // Índice 2 para 'Imagenes'
    $stmt_reserva->send_long_data(3, $imagen_color_binario);    // Índice 3 para 'Color'

    // Ejecutar la consulta
    if ($stmt_reserva->execute()) {
        echo "<script>alert('¡Muchas Gracias, en las proximas 24hs un representante de Mapolmet Equipamientos se pondra en contacto!'); window.location.href = 'index.php';</script>";
        exit;
    } else {
        // Mostrar el error
        echo "Error al realizar la reserva: " . $stmt_reserva->error;
    }
}
?>
