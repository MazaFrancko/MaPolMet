<?php
include("../conexion.php");

// Obtener los datos del formulario
$nombre_producto_original = $_POST['nombre_producto_original'];
$nombre_producto_nuevo = $_POST['nombre_producto'];
$precio_nuevo = $_POST['precio'];
$tela_lino = $_POST['tela_lino'] ?? null;
$tela_ecocuero = $_POST['tela_ecocuero'] ?? null;
$tela_redes = $_POST['tela_redes'] ?? null;
$tela_marathon = $_POST['tela_marathon'] ?? null;
$Casco = $_POST['Casco'] ?? null; // Nuevo campo para materiales de fabricación

// Crear la consulta para actualizar los datos del producto
$query = "UPDATE mostrar_producto SET nombre_producto = ?, precio = ?, Tela_Lino = ?, Tela_Ecocuero = ?, Tela_Reses = ?, Tela_Marathon = ?, Casco = ?";

// Manejo de imágenes de planos (hasta 5 planos)
$imagenes_planos = [];
for ($i = 1; $i <= 5; $i++) {
    $input_name = "imagen_plano_" . $i;
    if (isset($_FILES[$input_name]) && $_FILES[$input_name]['size'] > 0) {
        $imagen_plano = file_get_contents($_FILES[$input_name]['tmp_name']);
        $query .= ", imagen_plano_$i = ?";
        $imagenes_planos[] = $imagen_plano;
    }
}

// Manejo de imágenes del producto (hasta 10 imágenes de producto)
$imagenes_productos = [];
for ($i = 1; $i <= 10; $i++) {
    $input_name = "imagen_producto_" . $i;
    if (isset($_FILES[$input_name]) && $_FILES[$input_name]['size'] > 0) {
        $imagen_producto = file_get_contents($_FILES[$input_name]['tmp_name']);
        $query .= ", imagen_producto_$i = ?";
        $imagenes_productos[] = $imagen_producto;
    }
}

// Manejo de colores plásticos (hasta 20 colores)
$colores_plasticos = [];
for ($i = 0; $i <= 19; $i++) {
    $input_name = "color_$i";
    if (isset($_POST[$input_name]) && !empty($_POST[$input_name])) {
        $color = $_POST[$input_name];
        $query .= ", color_plastico_$i = ?";
        $colores_plasticos[] = $color;
    }
}

// Completar la consulta de actualización
$query .= " WHERE nombre_producto = ?";

// Preparar el statement
$stmt = $conexion->prepare($query);

// Vincular los parámetros
$types = str_repeat("s", 7 + count($imagenes_planos) + count($imagenes_productos) + count($colores_plasticos) + 1);
$params = array_merge([
    $nombre_producto_nuevo,
    $precio_nuevo,
    $tela_lino,
    $tela_ecocuero,
    $tela_redes,
    $tela_marathon,
    $Casco
], $imagenes_planos, $imagenes_productos, $colores_plasticos, [$nombre_producto_original]);
$stmt->bind_param($types, ...$params);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo '<script>
        alert("Producto modificado con éxito, Que tenga un lindo dia :) ");
        window.location="panel.php";
        </script>';
} else {
    echo "Error al modificar el producto: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conexion->close();
?>
