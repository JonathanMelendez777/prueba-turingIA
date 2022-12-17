<?php
include "css/header.php";
?>
<!DOCTYPE html>
<html lang="es">
<!-- se especifica el lenguaje a utilizar dentro de la página -->

<head>
    <!-- aquí se declaran las páginas de donde se sacaran algunos estilos como el carousel -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>PRUEBA TURING-IA</title><!-- Titulo de la página-->
</head>

<body>
    <!-- header de esta página -->
    <header id="header4">
        <div class="menu">
            <div class="contenedor">
                <a href="index.php" id="alogo">
                    <p class="logo">
                        TURING-IA
                    </p>
                </a>
                <img class="menu-icon" src="assets/menu.png">
                <nav>
                    <!-- opciones de la barra -->
                    <ul class="lista-menu">
                        <li><a href="index.php">INICIO</a></li>
                        <li><a href="nosotros.php">NOSOTROS</a></li>
                        <li><a href="servicios.php">SERVICIOS</a></li>
                        <li><a href="#">TABLEU</a></li>
                        <li><a href="blog.php">BLOG</a></li>
                        <li><a href="contacto.php">CONTACTO</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Este contenedor contiene una imagen de fondo especificada en el css -->
        <div class="contenedor" id="contenedor-sobre-flex">
            <div class="contenedor-sobre">
                <h1 id="h1-grande">BLOG</h1>
                <div class="p">
                    <p>Los grandes conocimientos engendran las grandes dudas</p>
                </div>
            </div>
        </div>
    </header>
    <!--contenido principal -->
    <section class="blog">
        <div class="titulo">
            <h1>Noticias relevantes</h1>
        </div>
        <!-- Búsqueda Google -->
        <div class="row" id="buscador">
            <form method="GET" action="http://www.google.com/search">
                <table bgcolor="#FFFFFF">
                    <tr><td>
                        <a href="http://www.google.com/">
                        <img src="http://www.google.com/logos/Logo_40wht.gif" border="0" alt="Google" align="absmiddle"></a>
                        <input type=text id="busqueda" name=q size=31 maxlength=255 value="">
                        <input type=hidden name=hl value=es>
                        <input type=submit class="btn btn-outline-primary" name=btnG VALUE="Buscar">
                    </td></tr>
                </table>
            </form>
        </div>
        <!-- Búsqueda Google -->


        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://www.turing-ia.com/blog/wp-content/uploads/2022/11/digital-world-map-hologram-blue-background-scaled.jpg" alt="Noticia 1">
                        <div class="card-body">
                            <h5 class="card-title">Análisis de datos a través de mapas geográficos</h5>
                            <p class="card-text">Realiza análisis precisos a través del mapas que te permitan</p>
                            <a href="https://www.turing-ia.com/blog/2022/12/analisis-de-datos-con-mapas" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://www.turing-ia.com/blog/wp-content/uploads/2022/11/laptop-screen-with-technical-information-scaled.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Blueprint de Tableau</h5>
                            <p class="card-text">Conviértete en una compañía data driven en 4 pasos</p>
                            <a href="https://www.turing-ia.com/blog/2022/12/blueprint-de-tableau" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://www.turing-ia.com/blog/wp-content/uploads/2022/11/hologram-projector-screen-with-cloud-system-technology-1-scaled.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">¿Cómo saber si mi empresa necesita Business Intelligence?</h5>
                            <p class="card-text">BI ayuda a tu empresa a adaptarse a las nuevas tecnologías</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://www.turing-ia.com/blog/wp-content/uploads/2022/09/pexels-fauxels-3183156-scaled.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Analitica de datos con Tableau</h5>
                            <p class="card-text">Permita que Tableau desate la creatividad y acelere el éxito</p>
                            <a href="https://www.turing-ia.com/blog/2022/12/analitica-de-datos-con-tableau" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer id="footer2">
            <!-- Botón flotante de whatsapp -->
            <a href="https://api.whatsapp.com/send?phone=7713917568" class="btn-wsp" target="_blank">
                <i class="fa fa-whatsapp icono"></i>
            </a>
            <!-- Se incluye el archivo footer -->
            <?php
            include "css/footer.php"
            ?>
        </footer>

        <!-- Se importan los scripts utilizados -->  
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</body>
</html>