<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Back-end</title>
        <link type="text/css" href="css/back.css" rel="stylesheet" />
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/back.js"></script>
    </head>
    <body>
        <div id="cabecera">
            <img class="logo" src="img/logo.png" alt="Logo" />
            <ul id="menus">
                <li class="menu"><a class="boton" href="">Admin. Menú</a></li>
                <li class="menu"><a class="boton" href="">Admin. Noticia</a></li>
                <li class="menu"><a class="boton" href="">Admin. Banners</a></li>
                <li class="menu"><a class="boton" href="">Admin. Logout</a></li>
            </ul>
        </div>
        <div id="contenido">
            <div id="formulario">
                <h1>Editar/Crear Banners</h1>
                <form action="" method="post">
                    <label>Título</label><input type="text" id="titulo" />
                    <label>Url</label><input type="text" id="url" />
                    <label>Imagen</label><input type="text" id="imagen" />
                </form><br/>
                <a href=""><strong>Guardar</strong></a>
            </div>
            <div id="operaciones">
                <a href=""><strong>Agregar Nuevo</strong></a>
                <div id="listado">
                    <h2>Listado de banners</h2>
                    <ul>
                        <li>
                            <a href="#"><div class="tituloLi">Elemnto 1</div></a>
                            <a href="#"><div class="iconEliminar"></div></a>
                            <a href="#"><div class="iconModificar"></div></a>
                        </li>
                        <li>
                            <a href="#"><div class="tituloLi">Elemnto relativamente grade</div></a>
                            <a href="#"><div class="iconEliminar"></div></a>
                            <a href="#"><div class="iconModificar"></div></a>
                        </li>
                        <li>
                            <a href="#"><div class="tituloLi">Elemnto 3</div></a>
                            <a href="#"><div class="iconEliminar"></div></a>
                            <a href="#"><div class="iconModificar"></div></a>
                        </li>
                        <li>
                            <a href="#"><div class="tituloLi">Elemnto 4</div></a>
                            <a href="#"><div class="iconEliminar"></div></a>
                            <a href="#"><div class="iconModificar"></div></a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
