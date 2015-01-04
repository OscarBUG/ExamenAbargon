<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Front-end</title>
        <link type="text/css" href="estiloFront.css" rel="stylesheet" />
        <script src="jquery-1.11.2.min.js"></script>

        <script>

            $(document).ready(function(){
                $('#slider img:gt(0)').hide();
                setInterval(function () {
                    $('#slider img:first-child').fadeOut(0)
                        .next('img').fadeIn(1000)
                        .end().appendTo('#slider');
                }, 4000);
            });

        </script>
    </head>
    <body>
        <div id="cabecera">
            <img class="logo" src="img/Logo.png" alt="Logo" />
            <ul id="menus">
                <li class="menu"><a class="boton" href="">Menu 1</a></li>
                <li class="menu"><a class="boton" href="">Menu Muy Grande</a></li>
                <li class="menu"><a class="boton" href="">Menu 3</a></li>
                <li class="menu"><a class="boton" href="">Menu 4</a></li>
                <li class="menu"><a class="boton" href="">Menu Aun Mas Grande</a></li>
            </ul>
        </div>
        <div id="contenido">
            <div id="slider">
                <img src="img/slider/slider0.jpg" alt="slider0" />
                <img src="img/slider/slider2.jpg" alt="slider2" />
                <img src="img/slider/slider3.jpg" alt="slider3" />
                <img src="img/slider/slider4.jpg" alt="slider4" />
                <img src="img/slider/slider5.jpg" alt="slider5" />
            </div>
            <div id="noticia">
                <h1>Titulo Noticia</h1>
                <p>
                    Contenido de la Notica
                </p>
            </div>
        </div>
        <div id="banners">
            <a class="banner" href="http://lorempixel.com/400/200/"><img src="http://lorempixel.com/401/200/" alt="banner1" /></a>
            <a class="banner" href="http://lorempixel.com/400/200/"><img src="http://lorempixel.com/402/200/" alt="banner1" /></a>
            <a class="banner" href="http://lorempixel.com/400/200/"><img src="http://lorempixel.com/403/200/" alt="banner1" /></a>
            <a class="banner" href="http://lorempixel.com/400/200/"><img src="http://lorempixel.com/404/200/" alt="banner1" /></a>
            <a class="banner" href="http://lorempixel.com/400/200/"><img src="http://lorempixel.com/405/200/" alt="banner1" /></a>
        </div>
    </body>
</html>
