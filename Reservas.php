<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas de Sillas</title>
    <link rel="stylesheet" href="CSS\Estilo_mostrar_reservas.css">
</head>
<body>
<?php
include("conexion.php");

// Consulta para obtener los datos de la tabla
$sql = "SELECT Nombre, Contacto, Imagenes, Color, Precio, Fecha, Indicaciones, nombre_de_contacto FROM `datos_de_reservas`
";

$resultado = $conexion->query($sql);
?>
<header class="encabezado">
    <h1>Reservas "Mapolmet Equipamientos"</h1>
</header>
<main>
    <div class="contenedor-reservas">
        <?php
        // Verificar si hay resultados
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $nombre = htmlspecialchars($fila["Nombre"]);
                $contacto = htmlspecialchars($fila["Contacto"]);
                $imagenBlob = $fila["Imagenes"]; // Imagen del producto
                $colorBlob = $fila["Color"]; // Imagen del color
                $precio = htmlspecialchars($fila["Precio"]);
                $fecha = htmlspecialchars($fila["Fecha"]);
                $indicaciones = htmlspecialchars($fila["Indicaciones"]);
                $nombre_cliente = htmlspecialchars($fila["nombre_de_contacto"]);

                // Convertir la imagen del producto (Imagenes) a base64
                $imagenBase64 = base64_encode($imagenBlob);
                $imagenDataUrl = "data:image/jpeg;base64," . $imagenBase64;

                // Convertir la imagen del color (Color) a base64
                $colorBase64 = base64_encode($colorBlob);
                $colorDataUrl = "data:image/jpeg;base64," . $colorBase64;

                ?>
                <div class="reserva">
                    <div class="detalles">
                        <h2 class="nombre-silla"><?php echo $nombre; ?></h2>
                        <p class="precio">Precio: $<?php echo $precio; ?></p>
                        <p class="datos-contacto">Numero de Contacto: <?php echo $contacto; ?></p>
                        <p class="datos-contacto">Nombre del Cliente: <?php echo $nombre_cliente; ?></p>
                        <p class="indicaciones">Indicaciones del Cliente: <?php echo $indicaciones; ?></p>

                        <!-- Imagen del color -->
                        <p class="color">Color:</p>
                        <img src="<?php echo $colorDataUrl; ?>" alt="Imagen de Color" class="imagen-color">

                        <!-- Botón para eliminar -->
                        <a href="eliminar.php?nombre=<?php echo urlencode($nombre); ?>" class="boton-eliminar" onclick="return confirm('¿Estás seguro de que deseas eliminar esta reserva?');">Eliminar Reserva</a>
                    </div>
                    <div class="imagen">
                        <img src="<?php echo $imagenDataUrl; ?>" alt="Imagen de Producto: <?php echo $nombre; ?>">
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No hay reservas disponibles.</p>";
        }
        ?>
    </div>
</main>
</body>
</html>
