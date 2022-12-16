<html>

<head>
    <!-- aquí se declaran las páginas de donde se sacaran algunos estilos como el carousel -->
    <link rel="stylesheet" href="style.css?v=<?php echo (rand()); ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>TURING-IA</title><!-- Titulo de la página-->
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                scroll = $(window).scrollTop();
                if (scroll > 100) {
                    //En caso de scrollear, la barra cambia el color de fondo
                    $('.menu').css({
                        "position": "fixed"
                    });
                    $('.menu').css({
                        "width": "100%"
                    });
                    $('.menu').css({
                        "top": "0"
                    });
                    $('.menu').css({
                        "background": "#10356d"
                    });
                    $('.menu').css({
                        "opacity": "1"
                    });
                    $('.logo').css({
                        "color": "#fff"
                    });
                    $('.menu').css({
                        "box-shadow": "rgba(0, 0, 0, .22) 6px 1px 1px"
                    });
                    $('.menu').css({
                        "z-index": "100"
                    });
                } else {
                    $('.menu').css({
                        "position": "relative"
                    });
                    $('.menu').css({
                        "background": "#000000"
                    });
                    $('.menu').css({
                        "opacity": "0.75"
                    });
                    $('.menu').css({
                        "box-shadow": "0 0 0"
                    });
                    $('.logo').css({
                        "color": "#fff"
                    });
                }
            })

            $('.menu-icon').click(function() {
                $('header nav').slideToggle();
            })
        })
    </script>
</body>

</html>   