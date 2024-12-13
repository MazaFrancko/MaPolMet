<?php
include "./Control.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de Productos</title>
    <link rel="stylesheet" href="../CSS/estilos-busqueda.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="./CSS/estilos_nav.css">
</head>
<body>
   <h1>BIENVENIDO AL APARTADO DE MODIFICACIONES</h1>
    <section class="contenedor-busqueda">
        <form method="POST" action="" class="barra-busqueda">
            <input type="text" name="search" placeholder="Buscar producto por nombre" value="<?php echo isset($_SESSION['search']) ? $_SESSION['search'] : ''; ?>">
            <input type="submit" value="">
        </form>
        <?php
        require '../conexion.php'; // Incluye el archivo de conexión

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $conexion->real_escape_string($_POST['search']);
            $_SESSION['search'] = $search; // Guarda el término de búsqueda en la sesión

            $sql = "SELECT nombre_producto, imagen_producto_1 FROM mostrar_producto WHERE nombre_producto LIKE '%$search%'";
            $result = $conexion->query($sql);

            $_SESSION['resultados'] = [];
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $_SESSION['resultados'][] = $row;
                }
            }
        }

        if (isset($_SESSION['resultados'])) {
            echo '<div class="resultados">';
            foreach ($_SESSION['resultados'] as $producto) {
                echo '<a href="./Modificar_Datos.php?nombre_producto=' . urlencode($producto['nombre_producto']) . '" class="producto">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($producto['imagen_producto_1']) . '" alt="' . $producto['nombre_producto'] . '">';
                echo '<p>' . $producto['nombre_producto'] . '</p>';
                echo '</a>';
            }
            echo '</div>';
        }

        $conexion->close();
        ?>
    </section>
    <footer>
        <section class="contenedor-informacion">
            <div class="columna-1">
                <a href="./index.php" class="logo-empresa">
                    <img src="./assets/Logo-footer.png" alt="">
                </a>
                <p>Transformamos cada espacio en un lugar especial con muebles diseñados para brindar comodidad, estilo y durabilidad. Porque cada silla y cada mueble cuenta una historia de elegancia y confort que perdura.</p>
            </div>
            <div class="columna-2">
                <a href="https://www.facebook.com/profile.php?id=100094507230448" target="_blank" class="fila-redes">
                    <img src="./assets/facebook.png" alt="icono-facebook" class="icono-1">
                    <p>Mapolmet equipamientos</p>
                </a>
                <a href="https://www.instagram.com/mapolmetequipamientos/" target="_blank" class="fila-redes">
                    <img src="./assets/instagram.png" alt="" class="icono-2">
                    <p>MaPolMet</p>
                </a>
                <a href="https://wa.me/54264154218697?text=Hola,%20quisiera%20saber%20mas%20acerca%20de%20los%20servicios%20que%20ofrece%20MapolMet." target="_blank" class="fila-redes">
                    <img src="./assets/WhatsApp_icon.png" alt="" class="icono-whatsapp">
                    <p>264154218697</p>
                </a>
                <a href="https://wa.me/542644392445?text=Hola,%20quisiera%20saber%20mas%20acerca%20de%20los%20servicios%20que%20ofrece%20MapolMet." target="_blank" class="fila-redes">
                    <img src="./assets/WhatsApp_icon.png" alt="" class="icono-whatsapp">
                    <p>2644392445</p>
                </a>
                <a href="https://wa.me/542645267038?text=Hola,%20quisiera%20saber%20mas%20acerca%20de%20los%20servicios%20que%20ofrece%20MapolMet." target="_blank" class="fila-redes">
                    <img src="./assets/WhatsApp_icon.png" alt="" class="icono-whatsapp">
                    <p>2645267038</p>
                </a>
                <a href="https://www.google.com/maps?ll=-31.536025,-68.545443&z=15&t=h&hl=es&gl=AR&mapclient=embed&cid=15958394625635988769" target="_blank" class="fila-redes direccion">
                    <img src="./assets/marcador.png" alt="" class="icono-direccion">
                    <p>B. Rivadavia Oeste 1298</p> 
                </a>
            </div>
            <div class="columna-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2838.2345774780074!2d-68.54801822505067!3d-31.536020102043707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96816a830db56bc9%3A0xdd779b5c5e893521!2sMaPolMet%20Equipamientos!5e1!3m2!1ses!2sar!4v1726669512154!5m2!1ses!2sar" style="border:3;border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <section class="contenedor-footer">
            <div class="copyright">
                &copy; 2024 Mapolmet - Todos los Derechos Reservados
            </div>
            <div class="copyright">
                Imagenes proveidas por: &copy;Rossi diseño + Oficina
            </div>
            <div class="informacion">
                <a href="./index.php">Inicio</a> | <a href="./Sobre-Nosotros.php">Quienes Somos</a>
            </div>
        </section>
    </footer>
</body>
</html>
