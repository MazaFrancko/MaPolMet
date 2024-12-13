<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
    <link rel="stylesheet" href="../CSS/Modificar.css">
</head>
<body>

<?php
// Incluir la conexión a la base de datos
include("../conexion.php");
include "./Control.php";

// Obtener el nombre del producto desde la URL
$nombre_producto = urldecode($_GET['nombre_producto']);

// Consulta para obtener los datos del producto
$query = "SELECT * FROM mostrar_producto WHERE nombre_producto = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("s", $nombre_producto);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();

    // Consultar los colores disponibles
    $colores_query = "SELECT nombre FROM color_plastico";
    $colores_resultado = $conexion->query($colores_query);
    $colores = $colores_resultado->fetch_all(MYSQLI_ASSOC);
?>

<!-- Formulario para mostrar y modificar el producto -->
<form action="./Guardar_Modificaciones.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="nombre_producto_original" value="<?php echo $row['nombre_producto']; ?>">

    <!-- Mostrar y permitir modificar el nombre del producto -->
    <label for="nombre_producto">Nombre del Producto:</label>
    <input type="text" name="nombre_producto" value="<?php echo $row['nombre_producto']; ?>"><br>

    <label for="precio">Precio:</label>
    <input type="text" name="precio" value="<?php echo $row['precio']; ?>"><br>

    <!-- Mostrar imágenes de planos del producto (4 planos) -->
    <h3>Imágenes de Planos:</h3>
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <?php $plano = "imagen_plano_" . $i; ?>
        <?php if (!empty($row[$plano])): ?>
            <!-- Si la imagen existe, mostrarla -->
            <img src="data:image/jpeg;base64,<?php echo base64_encode($row[$plano]); ?>" alt="Plano <?php echo $i; ?>" style="max-width: 200px; max-height: 200px;"><br>
        <?php endif; ?>
        <!-- Permitir cambiar o agregar una nueva imagen para el plano -->
        <label for="imagen_plano_<?php echo $i; ?>">Cambiar Plano <?php echo $i; ?>:</label>
        <input type="file" name="imagen_plano_<?php echo $i; ?>"><br>
    <?php endfor; ?>
<!-- Mostrar imágenes del producto (10 imágenes) -->
<h3>Imágenes del Producto:</h3>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <?php $columna_imagen = "imagen_producto_" . $i; ?>
            <?php if (!empty($row[$columna_imagen])): ?>
                <!-- Si la imagen existe, mostrarla -->
                <img src="data:image/jpeg;base64,<?php echo base64_encode($row[$columna_imagen]); ?>" alt="Imagen del Producto"><br>
            <?php endif; ?>
            <!-- Permitir cambiar o agregar una nueva imagen -->
            <label for="imagen_producto_<?php echo $i; ?>">Imagen Producto <?php echo $i; ?>:</label>
            <input type="file" name="imagen_producto_<?php echo $i; ?>"><br>
        <?php endfor; ?>
     <!-- Sección de selección de colores -->
     <h3>Seleccionar Colores:</h3>
    <?php for ($j = 1; $j <= 20; $j++): ?>
        <label for="color_<?php echo $j; ?>">Color <?php echo $j; ?>:</label>
        <select name="color_<?php echo $j; ?>" id="color_<?php echo $j; ?>">
            <option value="">Seleccione un color</option>
            <?php foreach ($colores as $color): ?>
                <option value="<?php echo $color['nombre']; ?>">
                    <?php echo $color['nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select><br>
    <?php endfor; ?>
     <!-- Sección de selección de telas -->
     <h3>Características de Telas:</h3>
    <label for="tela_lino">Contiene Tela Lino:</label>
    <select name="tela_lino" id="tela_lino">
        <option value="">Seleccione</option>
        <option value="Si">Si</option>
        <option value="No">No</option>
    </select><br>

    <label for="tela_ecocuero">Contiene Tela Ecocuero:</label>
    <select name="tela_ecocuero" id="tela_ecocuero">
        <option value="">Seleccione</option>
        <option value="Si">Si</option>
        <option value="No">No</option>
    </select><br>

    <label for="tela_redes">Contiene Tela Redes:</label>
    <select name="tela_redes" id="tela_redes">
        <option value="">Seleccione</option>
        <option value="Si">Si</option>
        <option value="No">No</option>
    </select><br>

    <label for="tela_marathon">Contiene Telas Marathon:</label>
    <select name="tela_marathon" id="tela_marathon">
        <option value="">Seleccione</option>
        <option value="Si">Si</option>
        <option value="No">No</option>
    </select><br>
    <label for="Casco">Materiales de Fabricación:</label>
        <select name="Casco" id="Casco">
            <option value="">Seleccione</option>
            <option value="Monocasco Polimero Plastico">Monocasco Polímero Plástico</option>
            <option value="Casco Polimero Plastico">Casco Polímero Plástico</option>
            <option value="Casco Polimero Plastico. Casco Tapizado Tela Lino / Tela Ecocuero">Casco Polímero Plástico. Casco Tapizado Tela Lino / Tela Ecocuero</option>
            <option value="Casco Tapizado Tela Lino / Tela Ecocuero">Casco Tapizado Tela Lino / Tela Ecocuero</option>
            <option value="Respaldo Polimero Plastico. Asiento Tapizado Tela Lino / Tela Ecocuero">Respaldo Polímero Plástico. Asiento Tapizado Tela Lino / Tela Ecocuero</option>
            <option value="Tapizado Tela Ecocuero">Tapizado Tela Ecocuero</option>
            <option value="Respaldo Polimero Plastico. Tapizado Asiento Tela Marathon / Tela Ecocuero">Respaldo Polímero Plástico. Tapizado Asiento Tela Marathon / Tela Ecocuero</option>
            <option value="Estructura Polimero Plastico. Tapizado Asiento y Respaldo Tela Marathon / TelaEcocuero">Estructura Polímero Plástico. Tapizado Asiento y Respaldo Tela Marathon / Tela Ecocuero</option>
            <option value="Estructura Polimero Plastico. Tapizado Asiento Tela Marathon / Tela Ecocuero. Respaldo Tela Red">Estructura Polímero Plástico. Tapizado Asiento Tela Marathon / Tela Ecocuero. Respaldo Tela Red</option>
        </select>

    

    <!-- Botón para enviar el formulario -->
    <input type="submit" value="Modificar Producto">
</form>

<?php
} else {
    echo "Producto no encontrado.";
}
?>

<a href="index.php">Regresar</a>
