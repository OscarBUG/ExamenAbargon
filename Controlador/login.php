<?php

require 'sesion.php';

if (empty($_POST["usuario"])){
    echo "Introduce un nombre de usuario";
}else if (empty($_POST["pass"])){
    echo "Introduce una contraseña";
}else{
    $usuario = $_POST["usuario"];
    $pass = $_POST["pass"];
    //Verificar en la BD
    $_SESSION["usuario"] = $usuario;
    $_SESSION["pass"] = $pass;
    //header("Location: ../admin.php");
}