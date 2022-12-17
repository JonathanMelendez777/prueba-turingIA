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
    <header id="header3">
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
                <h1 id="h1-grande">SERVICIOS</h1>
                <div class="p">
                    <p>Tenemos una gran gama de soluciones para llevar al máximo el nivel tu compañia</p>
                </div>
            </div>
        </div>
    </header>

    <!-- contenido principal de la página -->
    <main>
        <!--Section: Lo que ofrecemos -->
        <section class="que-ofrecemos">
            <div class="titulo">
                <h1>¿QUÉ OFRECEMOS?</h1>
                <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <h2 class="text-left">Servicios en Turing-IA</h2>
                        <p>Proporcionamos a nuestros clientes una gama de productos y servicios relacionados 
                            con el analisis de datos, mediante el uso de tecnologias como Tableau, Salesforce, 
                            PMI, Scrum.</p>
                    </div>
                    <div class="col-12 col-md-7">
                        <img src="assets/servicios2.jpg" class="img-fluid">
                    </div>
                
                </div>
            </div>
            </div>
        </section>
        <!-- Section: Expertos en -->
        <section class="expertos" >
            <div class="container">
                <div class="row text-center" id="crad-exp">
                    <div class="col-sm text-left">
                    <h1>Tenemos los mejores expertos en las siguientes áreas:</h1>
                    </div>
                    <div class="col-sm" id="cont-tableu">
                        <div id="abajo">
                            <p>Tableau</p>
                        </div>
                    </div>
                    <div class="separador"></div>
                    <div class="col-sm" id="cont-tableu2">
                        <div id="abajo">
                            <p>Business Intelligence</p>
                        </div>
                    </div>
                </div>
                
                <div class="row text-center" id="crad-exp">
                    <div class="col-sm" id="cont-tableu3">
                        <div id="abajo">
                            <p>Business Analyst</p>
                        </div>
                    </div>
                    <div class="separador"></div>
                    <div class="col-sm" id="cont-tableu4">
                        <div id="abajo">
                            <p>Data Analyst</p>
                        </div>
                    </div>
                    <div class="separador"></div>
                    <div class="col-sm" id="cont-tableu5">
                        <div id="abajo">
                            <p>Machine Learning</p>
                        </div>
                    </div>
                </div>

                <div class="row text-center" id="crad-exp">
                    <div class="col-sm" id="cont-tableu6">
                        <div id="abajo">
                            <p>Inteligencia Artificial</p>
                        </div>
                    </div>
                    <div class="separador"></div>
                    <div class="col-sm" id="cont-tableu7">
                        <div id="abajo">
                            <p>Data Mining</p>
                        </div>
                    </div>
                    <div class="separador"></div>
                    <div class="col-sm" id="cont-tableu8">
                        <div id="abajo">
                            <p>Big Data</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </main>


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
