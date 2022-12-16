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
    <header id="header2">
        <div class="menu">
            <div class="contenedor">
                <a href="index.php" id="alogo">
                    <p class="logo">
                        TURING-IA
                    </p>
                </a>
                <img class="menu-icon" src="assets/menu.png">
                <nav>
                    <ul class="lista-menu">
                        <li><a href="index.php">INICIO</a></li>
                        <li><a href="nosotros.php">NOSOTROS</a></li>
                        <li><a href="#">SERVICIOS</a></li>
                        <li><a href="#">TABLEU</a></li>
                        <li><a href="#">PORTAL</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">CONTACTO</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="contenedor" id="contenedor-sobre-flex">
            <div class="contenedor-sobre">
                <h1 id="h1-grande">SOBRE NOSOTORS</h1>
                <div class="p">
                    <p>Somos Especialistas en Proyectos de Business Analytics</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="quienes-somos">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <img src="https://turing-ia.com/assets/img/nosotros.webp" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-5">
                        <h1>¿QUÉNES SOMOS?</h1>
                        <h2 class="text-left">Turing-IA, tu mejor opción</h2>
                        <p>Somos una Empresa de Analítica e Inteligencia de Negocios en México con presencia 
                            internacional, conformada por especialistas en proyectos de Business Analytics. 
                            Contamos con mas de 15 años de experiencia brindando soluciones innovadoras en más de 
                            10 industrias y diferentes áreas funcionales.
                            Contamos con los mejores Especialistas en Análisis Descriptivos, Predictivos y Prescriptivos,
                            equipados con las certificaciones más importantes en el desarrollo de Análisis de Datos 
                            mediante Knowledge Discovery in Database (KDD)</p>
                    </div>
                
                </div>
            </div>
        </section>
        <section class="certificaciones">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <h1>NUESTRAS CERTIFICACIONES</h1>
                        <h2 class="text-left">Certificados por el (PMI® e IPMA® )</h2>
                        <p>Profesionales con conocimientos y competencias acreditadas ante organismos nacionales 
                            (CONOCER) e internacionales (PMI® e IPMA®). - Aplicación e impacto inmediato en mejores 
                            prácticas para administrar proyectos dentro de las organizaciones. - Incremento en la 
                            capacidad para realizar más y mejores proyectos. - Líderes de equipos de trabajo 
                            altamente orientados a lograr los resultados que contribuyen a los objetivos estratégicos 
                            de la organización.</p>
                    </div>
                    <div class="col-12 col-md-7">
                        <img src="https://turing-ia.com/assets/img/cer-pmi.jpg" class="img-fluid">
                    </div>
                
                </div>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-12 col-md-7">
                        <img src="https://turing-ia.com/assets/img/tableau-office.jpg" class="img-fluid" id="img2">
                    </div>
                    <div class="col-12 col-md-5">
                        <h2 class="text-left">Certificados por (Tableau Plataform®)</h2>
                        <p>Ayudamos en la toma de decisiones en todos los niveles de la empresa, comprender mejor 
                            los resultados de negocio, anticiparse a ellos, darles forma mediante la identificación 
                            de tendencias, modelos estadísticos, anomalías; analizarlos, comparar los casos “what-if” 
                            y predecir las amenazas, oportunidades potenciales, así como planificar, presupuestar y 
                            prever los recursos</p>
                    </div>                
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <h2 class="text-left">SCRUM</h2>
                        <p>Profesionales con conocimientos y competencias acreditadas De todas las formas que 
                            existen para poder desarrollar software, únicamente de manera colaborativa es como 
                            se logra. Es por eso que aplicamos la metodología Scrum para llevar más allá tus 
                            objetivos</p>
                    </div>
                    <div class="col-12 col-md-7">
                        <img src="https://turing-ia.com/assets/img/scrumn.jfif" class="img-fluid" >
                    </div>
                
                </div>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-12 col-md-7">
                        <img src="https://turing-ia.com/assets/img/data-driven.jpg" class="img-fluid" id="img2">
                    </div>
                    <div class="col-12 col-md-5">
                        <h2 class="text-left">Data Driven</h2>
                        <p>Tomamos decisiones estratégicas basadas en la interpretación y el análisis de datos. 
                            Es decir, se trata de ver la manera cómo se estructuran y organizan los datos con el 
                            fin de aplicarlos a su negocio y mejorar sus estrategias.</p>
                    </div>                
                </div>
            </div>
        </section>
    </main>

    <footer>
        <a href="https://api.whatsapp.com/send?phone=7713917568" class="btn-wsp" target="_blank">
            <i class="fa fa-whatsapp icono"></i>
        </a>
        <?php
        include "css/footer.php"
        ?>
    </footer>


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