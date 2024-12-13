<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <link rel="stylesheet" href="../CSS/Estilos_Login.css">
</head>
<body>
    <div class="contenedor-formulario">
        <form method="post" action="" class="formulario-logeo">
            <img src="../assets\Administrador1.png" alt="Administrador">
            <h2 class="titulo-formulario">MODO ADMINISTRADOR</h2>
            
            <div class="grupo-campo">
                <label for="usuario" class="etiqueta">Usuario</label>
                <input type="text" id="usuario" name="usuario" class="campo-texto" placeholder="Ingresa tu usuario" required>
            </div>
            <div class="grupo-campo">
                <label for="password" class="etiqueta">Contraseña</label>
                <input type="password" id="password" name="password" class="campo-texto" placeholder="Ingresa tu contraseña" required>
            </div>
            <div class="grupo-boton">
                <button type="submit" name="btningresar" class="boton-enviar">INGRESAR</button>
            </div>
        </form>

        <!-- Incluimos el archivo del controlador -->
        <?php
        include "Conexion_Administrador.php";
        include "Controlador_Administrador.php";
        ?>
    </div>
</body>
</html>
