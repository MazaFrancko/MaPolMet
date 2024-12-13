<?php
include "./Control.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\CSS\panel.css">
    <title>Panel de Control</title>
</head>
<body>
<h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre_completo']); ?> al Panel de Administrador</h1>
    <div class="button-container">
        <a href="agregar.php" class="control-button">Agregar Producto a la lista</a>
        <a href="cargar.php" class="control-button">Cargar</a>
        <a href="busqueda.php" class="control-button">Modificar</a>
        <a href="./mostrar_categorias_eliminar.php" class="control-button">Eliminar</a>
    </div>
</body>
</html>