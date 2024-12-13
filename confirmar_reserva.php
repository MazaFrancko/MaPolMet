<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Producto</title>
    <link rel="stylesheet" href="./CSS/estilos_nav.css">
    <link rel="stylesheet" href="CSS\styles.css">
    <link rel="stylesheet" href="./CSS/Confirmar_Reserva.css">

</head>
<body>
<div class="navbar">
        <a href="./index.php">
            <img src="./assets/Logo-Nav.png" alt="Logo" class="logo"> 
        </a>
        <!-- Botón burger que aparecerá cuando la pantalla sea menor a 1200px -->
        <div class="burger-container">
            <div class="burger-menu-icon">
                <span class="burger-icon">☰</span> Menú
            </div>
        </div>

        <div class="nav-links-container">
            <ul class="nav-links">
                <a href="index.php">Inicio</a>
                <li>
                <a href="sections.php?id_categoria=2">Diseño <span class="triangle"></span></a>
                    <ul class="dropdown">
                        <li><a href="productos.php?id_categoria=2&id_sub_categoria=1">Sillas de Diseño</a></li>
                        <li><a href="productos.php?id_categoria=2&id_sub_categoria=6">Mesas de Diseño</a></li>
                        <li><a href="productos.php?id_categoria=2&id_sub_categoria=2">Taburetes</a></li>
                        <li><a href="productos.php?id_categoria=2&id_sub_categoria=7">Sillones</a></li>
                        <li><a href="productos.php?id_categoria=2&id_sub_categoria=3">Sillas Wood</a></li>
                    </ul>
                </li>
                <li>
                <a href="sections.php?id_categoria=1">Oficina <span class="triangle"></span></a>
                    <ul class="dropdown">
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=8">Sillas Neumaticas</a></li>
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=9">Espacios Comunes</a></li>
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=10">Sillas Operativas</a></li>
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=11">Sillas Ejecutivas</a></li>
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=12">Sillas Gerenciales</a></li>
                        <li><a href="productos.php?id_categoria=1&id_sub_categoria=5">Tandems</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="./Sobre-Nosotros.php">Sobre Nosotros</span></a>
                </li>
                <li>
                    <a href="./contacto.php">Contactanos</span></a>
                </li>
                </li>
            </ul>
        </div>
    </div>
    <!-- Menú burger que aparecerá cuando el botón sea clicado -->
    <div class="burger-nav-links-container" id="burger-nav-links-container">
        <ul class="burger-nav-links">
            <li>
                <a href="#diseño">Diseño <span class="triangle"></span></a>
                <ul class="sub-menu">
                    <li><a href="productos.php?id_categoria=2&id_sub_categoria=1">Sillas de Diseño</a></li>
                    <li><a href="productos.php?id_categoria=2&id_sub_categoria=6">Mesas de Diseño</a></li>
                    <li><a href="productos.php?id_categoria=2&id_sub_categoria=2">Taburetes</a></li>
                    <li><a href="productos.php?id_categoria=2&id_sub_categoria=7">Sillones</a></li>
                    <li><a href="productos.php?id_categoria=2&id_sub_categoria=3">Sillas Wood</a></li>
                </ul>
            </li>
            <li>
                <a href="#oficina">Oficina <span class="triangle"></span></a>
                <ul class="sub-menu">
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=8">Sillas Neumaticas</a></li>
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=9">Espacios Comunes</a></li>
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=10">Sillas Operativas</a></li>
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=11">Sillas Ejecutivas</a></li>
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=12">Sillas Gerenciales</a></li>
                    <li><a href="productos.php?id_categoria=1&id_sub_categoria=5">Tandems</a></li>
                </ul>
            </li>
            <li>
                <a href="./Sobre-Nosotros.php">Sobre Nosotros </span></a>
            </li>
            <li>
                <a href="./contacto.php">Contactanos</span></a>
            </li>
        </ul>
    </div>

    <script>
        const burgerMenuIcon = document.querySelector('.burger-menu-icon');
        const burgerNavLinksContainer = document.getElementById('burger-nav-links-container');
    
        // Mostrar/Ocultar el menú burger al hacer clic en el ícono
        burgerMenuIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // Evita que el clic en el ícono cierre el menú inmediatamente
            burgerNavLinksContainer.classList.toggle('active');
        });
    
        // Mostrar/Ocultar submenú al hacer clic en un enlace del menú burger
        document.querySelectorAll('.burger-nav-links > li > a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.stopPropagation(); // Evita que el clic en el enlace cierre el menú inmediatamente
                const subMenu = link.nextElementSibling;
                if (subMenu && subMenu.classList.contains('sub-menu')) {
                    subMenu.classList.toggle('active');
                }
            });
        });
    
        // Cierra el menú burger si se hace clic fuera de él
        document.addEventListener('click', (e) => {
            if (!burgerNavLinksContainer.contains(e.target) && !burgerMenuIcon.contains(e.target)) {
                burgerNavLinksContainer.classList.remove('active');
            }
        });
    
        // Previene que el clic en el menú burger o en sus submenús cierren el menú
        burgerNavLinksContainer.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
    <main>
        <!-- Contenedor principal del producto centrado -->
        <div class="product-container">
            <div class="product-section">

                <?php
                include("conexion.php");

                // Obtener el título del producto de la URL
                $nombre_producto = isset($_GET['nombre_producto']) ? $_GET['nombre_producto'] : '';

                // Consultar la base de datos para el producto específico
                $query = "SELECT * FROM mostrar_producto WHERE nombre_producto = ?";
                $stmt = $conexion->prepare($query);
                $stmt->bind_param("s", $nombre_producto);
                $stmt->execute();
                $resultado = $stmt->get_result();

                if ($resultado->num_rows > 0) {
                    $row = $resultado->fetch_assoc();
                ?>

                    <!-- Imagen Principal del Producto -->
                    <div class="main-image">
                        <h2 class="product-name"><?php echo $row["nombre_producto"]; ?></h2>
                        <img class="img-centro" src="data:image/jpeg;base64,<?php echo base64_encode($row['imagen_producto_1']); ?>" alt="Imagen del Producto">
                        <p class="texto_del_main">Precio: $<?php echo $row["precio"]; ?></p>
                    </div>

                    <!-- Columna derecha con descripción del producto -->
                    <aside class="right-column">

                        <!-- Formulario para confirmar la reserva -->
                        <form class="reservation-form" method="POST" action="carga_base_reservas.php">
                            <!-- Campo oculto para nombre del producto -->
                            <input type="hidden" name="nombre_producto" value="<?php echo $row['nombre_producto']; ?>">
                            <!-- Campo oculto para la imagen del producto -->
                            <input type="hidden" name="imagen_producto" value="data:image/jpeg;base64,<?php echo base64_encode($row['imagen_producto_1']); ?>">
                            <!-- Campo oculto para el precio -->
                            <input type="hidden" name="precio" value="<?php echo $row['precio']; ?>">
                            <!-- Campo oculto para la fecha de la reserva -->
                            <input type="hidden" name="fecha_reserva" value="<?php echo date('Y-m-d H:i:s'); ?>">

                            <!-- Selector de Colores -->
                            <div class="form-group">
                                <label for="imagen_color_seleccionado">Colores Disponibles:</label>
                                <div class="colores">
                                    <?php
                                    for ($i = 1; $i <= 35; $i++) {
                                        $columna_color = "imagen_extra_" . $i;
                                        if (!empty($row[$columna_color])) {
                                            $imagen_color = 'data:image/jpeg;base64,' . base64_encode($row[$columna_color]);
                                            echo '<label>';
                                            echo '<input type="radio" name="imagen_color_seleccionado" value="' . $imagen_color . '" required>';
                                            echo '<img class="img-color" src="' . $imagen_color . '" alt="Color ' . $i . '">';
                                            echo '</label>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                            <!-- Campos del formulario visibles -->
                            <div class="form-group">
                                <label for="nombre_completo">Nombre Completo:</label>
                                <input type="text" id="nombre_completo" name="nombre_completo" required>
                            </div>
                            <div class="form-group">
                                <label for="numero_contacto">Número de Contacto:</label>
                                <input type="text" id="numero_contacto" name="numero_contacto" required>
                            </div>
                            <div class="form-group">
                                <label for="indicaciones">Indicaciones (Opcional):</label>
                                <textarea id="indicaciones" name="indicaciones" rows="4" placeholder="Estas indicaciones Ayudan a Mapolmet Equipamientos a poder Ofrecer un mejor Servicio "></textarea>
                            </div>
                            <div class="form-submit">
                                <button type="submit" onclick="setReservationTime()">Confirmar Reserva</button>
                            </div>
                        </form>
                    </aside>
                <?php } ?>
            </div>
        </div>
    </main>

                        <?php
                            // Depuración para verificar que la imagen del color seleccionado se está enviando correctamente
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (!empty($_POST['imagen_color_seleccionado'])) {
                                    echo '<pre>';
                                    var_dump($_POST['imagen_color_seleccionado']);
                                    echo '</pre>';
                                } else {
                                    echo '<p>No se ha seleccionado ninguna imagen de color.</p>';
                                }
                            }
                        ?>


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