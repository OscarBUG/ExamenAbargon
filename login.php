<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Back-end</title>
        <link type="text/css" href="css/back.css" rel="stylesheet" />
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/login.js"></script>
        <?php
            require 'Controlador/sesion.php';
        ?>
    </head>
    <body>
        <div id="cabecera">
            <img class="logo" src="img/logo.png" alt="Logo" />
            <div id="menus">
                <h1>Inicia Sesión antes de continuar</h1>
            </div>
        </div>
        <div>
            <div id="formulario" class="centrado">
                <h2>Bienvenido</h2>
                <form action="Controlador/login.php" METHOD="POST">
                    <label>Usuario</label><input type="text" name="usuario" />
                    <label>Contraseña</label><input type="text" name="pass" />
                </form>
                <a href=""><strong>Login</strong></a>
            </div>
        </div>
    </body>
</html>
