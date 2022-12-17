<?php
//Se incluye el archivo header el cual permite que este se quede fijo aunque se scrollee la página
//Además, cuando la pantalla se hace muy pequeña le permite que cuando se le de click al icono se abran las opciones del navbar
//include "css/header.php";
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
    <title>PRUEBA TURING-IA</title><!-- Titulo de la página-->
</head>

<body>
    <!-- HEADER -->
    <header id="header">
        <div class="menu">
            <div class="contenedor">
                <a href="index.php" id="alogo">
                    <p class="logo">
                        TURING-IA
                    </p>
                </a>
                <img class="menu-icon"
                    src="assets/menu.png"><!--Este es el icono que aparece cuando la ventana es muy pequeña-->
                <nav>
                    <!-- Opciones del navbar -->
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

        <div class="contenedor" id="contenedor-sobre-flex">
            <div class="header-video">
                <video src="assets/fondo.mp4" autoplay loop playsinline muted></video><!-- Video de fondo del header -->
            </div>
            <div class="contenedor-sobre">
                <h1 id="h1-grande">BIENVENIDO</h1>
                <div class="p1">
                    <p>Hacemos los
                        datos fáciles de
                        usar.</p>
                </div>
            </div>
        </div>
        <!-- Section: Redes Sociales -->
        <div class="redes">
            <div class="container p-4 pb-0">
                <section class="mb-12">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1"
                        href="https://www.facebook.com/Turing-Inteligencia-Artificial-106802521718296" role="button"><i
                            class="fa fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/IaTuring"
                        role="button"><i class="fa fa-twitter"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/ia_turing/"
                        role="button"><i class="fa fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1"
                        href="https://mx.linkedin.com/company/turing-inteligencia-artificial" role="button"><i
                            class="fa fa-linkedin-square"></i></a>

                </section>
            </div>
        </div>
    </header>
    <!-- Contenido principal de la página -->
    <main>
        <!-- Section: ¿Qué hacemos? -->
        <section class="hacemos">
            <div class="container">
                <div class="row d-flex justify-content-left">
                    <div class="titulo">
                        <h1>¿QUÉ HACEMOS?</h1>
                    </div>
                    <div class="contenido">
                        <h3>Contribuimos con su empresa para mejorar la toma de decisiones a través de sus datos.</h3>
                    </div>
                    <div class="boton">
                        <button type="button" class="btn btn-outline-primary">LEER MÁS</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: ¿Quiénes somos? -->
        <section class="nosotros">
            <div class="titulo">
                <h1>¿QUIÉNES SOMOS?</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 ">
                        <h2>Turing-IA, tu mejor opción</h2>
                        <p>Somos una Empresa de Analítica e Inteligencia de Negocios en México con presencia
                            internacional,
                            conformada por especialistas en proyectos de Business Analytics. Contamos con mas de 15 años
                            de
                            experiencia brindando soluciones innovadoras en más de 10 industrias y diferentes áreas
                            funcionales.
                            Contamos con los mejores Especialistas en Análisis Descriptivos, Predictivos y
                            Prescriptivos,
                            equipados con las certificaciones más importantes en el desarrollo de Análisis de Datos
                            mediante
                            Knowledge Discovery in Database (KDD)</p>
                    </div>

                    <div class="col-12 col-md-6">
                        <img src="https://turing-ia.com/assets/img/nosotros.webp" class="img-fluid">
                    </div>
                    <div class="boton">
                        <button type="button" class="btn btn-outline-primary">CONOCENOS</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Nuestro trabajo -->
        <section class="trabajo">
            <div class="titulo">
                <h1>NUESTRO TRABAJO</h1>
            </div>
            <!--Esta sección cuenta con un carousel que muestra diferentes cards con el trabajo que ha realizado la empres -->
            <div class="container mt-5 bg-white d-flex justify-content-center">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- El carousel se divide en 3 cards por sección -->
                        <div class="carousel-item active">
                            <div class="cards-wrapper">
                                <div class="col-12 col-md-4">
                                    <div class="card">
                                        <img src="https://turing-ia.com/assets/img/wholefoodsteaser1.jpg"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h4 class="card-title">Whole Foods Market </h4>
                                            <p class="card-text">Whole Foods Market democratiza el acceso a los datos en
                                                sus 460
                                                tiendas para 18 000 empleadosgracias a Tableau</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="card d-none d-md-block">
                                        <img class="card-img-top"
                                            src="https://turing-ia.com/assets/img/mondelezteaser.jpg" alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">Mondelez International</h4>
                                            <p class="card-text">Mondelez International digitaliza la adquisición para
                                                integrar más
                                                de 160 campos de datos, 28 000
                                                proveedores y generar
                                                millones en ahorro de costos
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="card d-none d-md-block">
                                        <img class="card-img-top"
                                            src="https://turing-ia.com/assets/img/grupopetersenfallback.jpg"
                                            alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">Grupo Petersen </h4>
                                            <p class="card-text">Grupo Petersen crea una cultura de datos con Tableau
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="col-12 col-md-4">
                                    <div class="card">
                                        <img src="https://turing-ia.com/assets/img/redhatteaser.jpg"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h4 class="card-title">Red Hat</h4>
                                            <p class="card-text">Red Hat adopta el Blueprint de Tableau y Tableau
                                                Online, y profundiza en la cultura de datos con más
                                                de 4500 empleados
                                                en menos de un año</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="card d-none d-md-block">
                                        <img class="card-img-top"
                                            src="https://turing-ia.com/assets/img/mondelezteaser.jpg" alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">Mondelez International</h4>
                                            <p class="card-text">Mondelez International digitaliza la adquisición para
                                                integrar más
                                                de 160 campos de datos, 28 000
                                                proveedores y generar
                                                millones en ahorro de costos
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="card d-none d-md-block">
                                        <img class="card-img-top"
                                            src="https://turing-ia.com/assets/img/grupopetersenfallback.jpg"
                                            alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">Grupo Petersen </h4>
                                            <p class="card-text">Grupo Petersen crea una cultura de datos con Tableau
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="col-12 col-md-4">
                                    <div class="card">
                                        <img src="https://turing-ia.com/assets/img/wholefoodsteaser1.jpg"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h4 class="card-title">Whole Foods Market </h4>
                                            <p class="card-text">Whole Foods Market democratiza el acceso a los datos en
                                                sus 460
                                                tiendas para 18 000 empleadosgracias a Tableau</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="card d-none d-md-block">
                                        <img class="card-img-top"
                                            src="https://turing-ia.com/assets/img/verizon-homepage-tile-final-2x.jpg"
                                            alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">Verizon</h4>
                                            <p class="card-text">Verizon usa Tableau para reducir las llamadas de
                                                soporte en un 43 % y así mejorar la experiencia del
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="card d-none d-md-block">
                                        <img class="card-img-top"
                                            src="https://turing-ia.com/assets/img/header_jpmc_1.jpg" alt="Card image">
                                        <div class="card-body">
                                            <h4 class="card-title">JPMorgan </h4>
                                            <p class="card-text">JPMorgan Chase elige Tableau para ofrecer análisis de
                                                autoservicio y seguir el vertiginoso ritmo de
                                                los cambios en el
                                                sector</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Botones que controlan las transiciones del carousel -->
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </section>

        <!-- Section: Tecnologías que utilizamos -->
        <section class="tecnologias">
            <div class="titulo">
                <h1>TECNOLOGÍAS QUE UTILIZAMOS</h1>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="https://www.slalom.com/sites/default/files/2022-08/partner-logo-color-tableau-300x150.svg"
                        class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="https://www.slalom.com/sites/default/files/2022-08/partner-logo-color-salesforce-300x150.svg"
                        class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="https://www.turing-ia.com/assets/img/pmi2.png" class="img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="https://www.turing-ia.com/assets/img/scrum.png" class="img-fluid">
                </div>
            </div>
        </section>

        <!-- Section: ¿Qué ofrecemos? -->
        <section class="ofrecemos">
            <div class="titulo">
                <h1>¿QUÉ OFRECEMOS?</h1>
            </div>
            <div class="container mt-2 mb-4 d-flex justify-content-center">
                <!-- Esta sección contiene un carousel con imagenes y una descripción de lo que ofrece la empresa -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/business.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>IMPLEMENTACIÓN DE PROYECTOS (BUSINESS ANALYST)</h5>
                                <p> Nuestra metodología de servicios se encuentra orientada en los estándares del
                                    Project Management Institute (PMI) ® e International Project Management
                                    Association (IPMA). Esto nos permite contar con las competencias para
                                    coordinar equipos de trabajo en el inicio, planeación, construcción,
                                    monitoreo y control de las actividades y recursos involucrados en un
                                    proyecto a partir de los objetivos y requerimientos de nuestro cliente.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/desarrollo-web.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>DESARROLLO DE APLICACIONES</h5>
                                <p>En un mundo moderno, con la cantidad de problemas y su complejidad cada vez
                                    es mayor, el desarrollo de aplicaciones, una herramienta para obtener
                                    soluciones precisas, dándole tareas repetitivas a la computadora y logrando
                                    así la "automatización" de procesos que todavía requieren la intervención
                                    de las personas en tareas repetitivas.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/work-shop.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>WORK SHOP</h5>
                                <p>Su estrategia debe abarcar la gestión de personas, procesos y cambios,
                                    incluida la identificación de casos de uso comercial inmediatos, la
                                    definición de roles, responsabilidades, el establecimiento de medidas
                                    para evaluar el éxito y el impacto.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/capacitacion.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>CAPACITACIÓN</h5>
                                <p>Nuestra gama de cursos de Tableau incluye: Tableau Prep Tableau Desktop Visual
                                    Analytics Tableau Server Adicionalmente ofrecemos cursos sobre: Business
                                    Intelligence,
                                    Data Mining, Big Data, Data to Insight.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/software.jpg" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>VENTA DE SOFTWARE</h5>
                                <p>Nos dedicamos a la venta de licencias de software, podemos recomendarle
                                    los sistemas que de acuerdo a sus necesidades son más adecuados.
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/hardware.jpg" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>VENTA DE HARDWARE</h5>
                                <p>Trabajamos con los mejores proveedores de México y tenemos la capacidad de
                                    cubrir cualquier necesidad que tenga de hardware. Redes, computadoras,
                                    impresoras y accesorios.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Controles de Carousel -->
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Section: Contacto -->
        <section class="contacto" id="contacto">
            <div class="titulo">
                <h1>CONTÁCTANOS</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <!-- Formulario para contactar con la empreasa -->
                        <form method="POST" action="correo.php">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNombre">Nombre*</label>
                                    <input type="text" class="form-control" id="inputNombre" name="name"
                                        placeholder="Nombre" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Correo*</label>
                                    <input type="email" class="form-control" id="inputEmail4" name="email"
                                        placeholder="Correo" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmpresa">Empresa</label>
                                    <input type="text" class="form-control" id="inputEmpresa" name="empresa"
                                        placeholder="Empresa">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPuesto">Puesto</label>
                                    <input type="text" class="form-control" id="inputPuesto" name="puesto"
                                        placeholder="Puesto">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTelefono">Número de Teléfeno*</label>
                                <input type="number" class="form-control" id="inputTelefono" name="telefono"
                                    placeholder="Número de Teléfono" required>
                            </div>
                            <div class="form-group">
                                <label for="inputMensaje">Mensaje*</label>
                                <input type="text" class="form-control" id="inputMensaje" name="mensaje"
                                    placeholder="Escribe tu Mensaje" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCiudad">Ciudad</label>
                                    <input type="text" class="form-control" id="inputCiudad" name="ciudad">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">Estado</label>
                                    <input type="text" id="inputState" class="form-control" name="estado">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputCp">C.P.</label>
                                    <input type="text" class="form-control" id="inputCp" name="cp">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary" name="enviar">Enviar</button>
                        </form>
                        <?php 
                        include("correo.php");
                        ?>
                    </div>
                    <!-- Mapa con la ubicación de la empresa -->
                    <div class="col-12 col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3374932397705!2d-99.17364388558957!3d19.397818646819566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff7769001035%3A0x8908d745e6168858!2sTuring%20-%20Inteligencia%20Artificial!5e0!3m2!1ses-419!2smx!4v1671131378325!5m2!1ses-419!2smx"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
        </section>

        <!-- Modal por si el correo no se envía -->
        <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Algo salio mal...</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        No se pudo enviar el correo de manera exitosa. 
                        Por favor Intentalo de nuevo.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal por si el correo si se envía -->
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Envío exitoso...</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        El correo se envío de manera satisfactoria, espera nustra respuesta en tu correo a lo largo de la semana.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!-- botón flotante de whatsapp -->
        <a href="https://api.whatsapp.com/send?phone=7713917568" class="btn-wsp" target="_blank">
            <i class="fa fa-whatsapp icono"></i>
        </a>
        <?php
        //Se incluye el archivo footer el cual contiene el código para insertarlo
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
<?php
//Lineas de código que reciben la variable de la url y determinan que modal abrir
    $respuesta = $_GET['ok']; 
    if($respuesta == 2): 
?>
        <script>
            $(function(){
                $('#errorModal').modal('show');
            })
        </script>;
<?php
   endif; 
   if($respuesta == 1): 
?>
        <script>
            $(function(){
                $('#Modal').modal('show');
            })
        </script>;
<?php endif; ?>