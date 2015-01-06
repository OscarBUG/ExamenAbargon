<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Front-end</title>
        <link type="text/css" href="Vista/css/front.css" rel="stylesheet" />
        <script src="Vista/js/jquery-1.11.2.min.js"></script>
        <script src="Vista/js/front.js"></script>
    </head>
    <body>
        <div id="cabecera">
            <div class="logo"></div>
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
                <img src="Vista/img/slider/slider0.jpg" alt="slider0" />
                <img src="Vista/img/slider/slider2.jpg" alt="slider2" />
                <img src="Vista/img/slider/slider3.jpg" alt="slider3" />
                <img src="Vista/img/slider/slider4.jpg" alt="slider4" />
                <img src="Vista/img/slider/slider5.jpg" alt="slider5" />
            </div>
            <div id="noticia">
                <h1>Titulo Noticia</h1>
                <p>
                    Contenido de la Notica
                </p>
            </div>
        </div>
        <div id="banners">
            <?php require 'Controlador/banners.php' ?>
        </div>
    </body>
</html>
