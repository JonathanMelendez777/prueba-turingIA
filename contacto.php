<!DOCTYPE html>
<html lang="es">

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
    <!--HEADER-->
    <header>
        <div class="row justify-content-between fixed-top" id="head-contacto">
            <div class="col-4">
                <h1>TURING-IA</h1>
            </div>
            <div class="col-4 text-right">
                <a href="index.php"><p>&#10005;</p></a>
            </div>
        </div>
    </header>
    <!--Contenido principal de la página -->
    <main>
        <section class="contact-p">
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
                    </div>
                    <!--El formulario se enviará desde correo.php-->
                    <?php 
                        include("correo.php");
                    ?>
                    <!-- Mapa con la ubicación de la empresa -->
                    <div class="col-12 col-md-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.3374932397705!2d-99.17364388558957!3d19.397818646819566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff7769001035%3A0x8908d745e6168858!2sTuring%20-%20Inteligencia%20Artificial!5e0!3m2!1ses-419!2smx!4v1671131378325!5m2!1ses-419!2smx"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
        </section>
    </main>

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