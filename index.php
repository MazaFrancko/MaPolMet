<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Configuración básica -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Título SEO -->
        <title>Mapolmet -- Venta / Restauracion de Sillas, Sillones, Muebles y Componentes.</title>
        <!-- Descripción para SEO -->
        <meta name="description" content="Empresa XYZ ofrece una amplia gama de sillas, sillones, muebles y componentes para la restauración y el hogar. Garantía de calidad y ergonomía.">
        <!-- Palabras clave (opcional, pero puede ser útil para algunos motores de búsqueda) -->
        <meta name="keywords" content="sillas, sillones, muebles, componentes, venta, venta de muebles, restauración, reparacion, mobiliario ergonómico, mobiliario, oficina, diseño, comercial">
        <!-- Autor -->
        <meta name="author" content="Mapolmet (Roddy Coria)">
        <!-- Robots -->
        <meta name="robots" content="index, follow">
        <!-- Canonical URL -->
        <link rel="canonical" href="https://www.Mapolmet.com.ar/mainpage.php">
        <!-- Estilos -->
        <link rel="stylesheet" href="CSS/Estilos_Index.css">
        <!-- Open Graph (Facebook) -->
        <meta property="og:title" content="Venta de Sillas y Muebles - Mapolmet">
        <meta property="og:description" content="Descubre nuestra selección de sillas, sillones y muebles ergonómicos. Calidad y confort garantizados.">
        <meta property="og:image" content="https://www.ejemplo.com/imagen-destacada.jpg">
        <meta property="og:url" content="">
        <meta property="og:type" content="website">
        <!-- Open Graph (Instagram) -->
        <meta property="og:title" content="Venta de Sillas y Muebles - Mapolmet">
        <meta property="og:description" content="Descubre nuestra selección de sillas, sillones y muebles ergonómicos. Calidad y confort garantizados.">
        <meta property="og:image" content="https://www.ejemplo.com/imagen-destacada.jpg">
        <meta property="og:url" content="">
        <meta property="og:type" content="website">
        <!-- Sitemap -->
        <link rel="sitemap" type="application/xml" title="Sitemap" href="../web-indexes/sitemap.xml" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <!-- JSON-LD (Datos estructurados) para mejorar los Rich Snippets -->
        <!-- Configuración adicional (seguridad, accesibilidad) -->
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="./CSS/estilos_nav.css">
        <link rel="stylesheet" href="./CSS/footer.css">
</head>
<body>
<?php
        require_once 'conexion.php';
    ?>

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
                <li>
                    <a href="./index.php" style="font-size: 30px;">Inicio</span></a>
                </li>
                </li>
                <li>
                <a href="productos.php?id_categoria=3&id_sub_categoria=13">Autopartes <span class="triangle"></span></a>
                    <ul class="dropdown">
                        
                    </ul>
                </li>
                <li>
                    <a href="./Sobre-Nosotros.php">Sobre Nosotros</span></a>
                </li>
                </li>
            </ul>
        </div>
        <a href="./busqueda.php" class="busqueda">
            <img src="./assets/lupa.png" alt="">
            <p>Buscar Producto</p>
        </a>
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
                <a href="./index.php">Inicio </span></a>
            </li>
            <li>
                <a href="#cocinas">Autopartes <span class="triangle"></span></a>
                <ul class="sub-menu">
                    
                </ul>
            </li>
            <li>
                <a href="./Sobre-Nosotros.php">Sobre Nosotros </span></a>
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
    <!-- Header con barra de busqueda y rutas -->
    <header>
        <li style="padding-left: 40px;"><a href="./index.php">Inicio </a> > </li>
    </header>
        <!-- Fin de script y comienzo de main-->
        <section class="seccion-tarjetas">
            <div class="header-txt">
                <h1>MaPolMet</h1>
            </div>
            <div class="container-tarjeta">
                <a href="sections.php?id_categoria=2" class="card">
                    <img src="./assets/mainpage_diseño.png" alt="Imagen de diseño">
                    <p class="parrafo-card">Diseño</p>
                </a>
                <a href="sections.php?id_categoria=1" class="card">
                    <img src="./assets/mainpage_Oficina.png" alt="Imagen de oficina">
                    <p class="parrafo-card">Oficina</p>
                </a>
                <a href="productos.php?id_categoria=3&id_sub_categoria=13" class="card">
                    <img src="./assets/mainpage_componentes.png" alt="Imagen de componentes">
                    <p class="parrafo-card">Autopartes</p>
                </a>
                <a href="./Sobre-Nosotros.php" class="card">
                    <img src="./assets/SobreNosotros/presentacion_1.jpg" alt="Imagen de Mosotros">
                    <p class="parrafo-card">Nosotros</p>
                </a>
            </div>
        </section>
    <main class="products container">
        <h2>Productos</h2>
        <?php
    // Consulta para obtener todas las categorías únicas
    $queryCategorias = "SELECT DISTINCT id_Categoria FROM mostrar_producto";
    $resultadoCategorias = $conexion->query($queryCategorias);

    // Comprobar si se han obtenido las categorías
    if ($resultadoCategorias && $resultadoCategorias->num_rows > 0) {
        // Array para almacenar las categorías
        $categorias = [];

        // Recorrer las categorías
        while ($rowCategoria = $resultadoCategorias->fetch_assoc()) {
            $categorias[] = $rowCategoria['id_Categoria'];
        }

        // Generar placeholders para las categorías
        $placeholders = implode(',', array_fill(0, count($categorias), '?'));

        // Consulta SQL para seleccionar los productos que pertenecen a las categorías obtenidas
        $query = "SELECT * FROM mostrar_producto WHERE 	id_Categoria IN ($placeholders)";
        $stmt = $conexion->prepare($query);

        if ($stmt) {
            // Vincular los valores de las categorías
            $stmt->bind_param(str_repeat('i', count($categorias)), ...$categorias);
            $stmt->execute();
            $resultado = $stmt->get_result();

            // Agrupar los productos por categoría
            $productosPorCategoria = [];
            while ($row = $resultado->fetch_assoc()) {
                $productosPorCategoria[$row['id_Categoria']][] = $row;
            }
        } else {
            echo "Error en la preparación de la consulta: " . $conexion->error;
        }
    } else {
        echo "No se encontraron categorías.";
    }
?>

<!-- Generar secciones dinámicamente según las categorías obtenidas -->
<?php
// Ordenar las categorías por su ID en orden ascendente
sort($categorias); 

foreach ($categorias as $categoria) { ?>
    <section class="categoria" id="categoria-<?php echo $categoria; ?>">
        <div class="carrusel-continuo">
            <div class="holder">
                <?php
                // Mostrar productos de la categoría actual
                if (!empty($productosPorCategoria[$categoria])) {
                    foreach ($productosPorCategoria[$categoria] as $producto) {
                        if (!empty($producto['imagen_producto_1'])) { // Mostrar solo si hay imagen
                            ?>
                            <a href="" class="product-card">
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($producto['imagen_producto_1']); ?>" alt="Imagen del Producto" class="img-carrusel-c">
                            </a>
                            <?php
                        }
                    }
                } else {
                    echo "No hay productos en esta categoría.";
                }
                ?>
            </div>
        </div>
        <?php
        // Condición para cambiar el enlace del botón "VER MÁS"
        if ($categoria == 3) { ?>
            <a href="productos.php?id_categoria=3&id_sub_categoria=13" class="boton-carrusel">VER MÁS</a>
        <?php } elseif ($categoria == 1) { ?>
            <a href="productos.php?id_categoria=1&id_sub_categoria=8" class="boton-carrusel">VER MÁS</a>
        <?php } elseif ($categoria == 2) { ?>
            <a href="productos.php?id_categoria=2&id_sub_categoria=1" class="boton-carrusel">VER MÁS</a>
        <?php } ?>
    </section>
<?php } ?>

    </main>
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