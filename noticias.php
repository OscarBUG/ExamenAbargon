<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Back-end</title>
        <link type="text/css" href="Vista/css/back.css" rel="stylesheet" />
        <script src="Vista/js/jquery-1.11.2.min.js"></script>
        <script src="Vista/js/admin.js">$tabla = "menus";</script>
        <?php require 'Controlador/sesion.php'; ?>
    </head>
    <body>
        <div id="cabecera">
            <div class="logo"></div>
            <ul id="menus" class="noticias">
                <li class="menu"><a class="boton" href="menus.php">Admin. Menús</a></li>
                <li class="menu"><a class="boton" href="noticias.php">Admin. Noticias</a></li>
                <li class="menu"><a class="boton" href="banners.php">Admin. Banners</a></li>
                <li class="menu"><a class="boton" href="Controlador/logout.php">Logout</a></li>
            </ul>
        </div>
        <div id="contenido"  class="dos">
            <div id="formulario">
                <h1>Editar/Crear Noticias</h1>
                <form action="" method="post">
                    <label>Título</label><input type="text" name="titulo" class="campo" />
                    <label>Noticia</label><textarea name="noticia" class="campo" ></textarea>
                    <label>Tipo</label><select name="tipo" class="campo">
                        <option value="1">Principal</option>
                        <option value="0">Normal</option>
                    </select>
                </form><br/>
                <a href=""><strong>Guardar</strong></a>
            </div>
            <div id="operaciones">
                <a href=""><strong>Agregar Nuevo</strong></a>
                <div id="listado">
                    <h2>Listado de noticias</h2>
                    <ul>

                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
