<?php

require '../Modelo/login.php';

if (empty($_POST["usuario"])){
    echo "Introduce un nombre de usuario";
}else if (empty($_POST["password"])){
    echo "Introduce una contraseña";
}else{
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    if(existeUsuario($usuario) < 0 || validarLogin($usuario, $password) < 0){
        echo "Ocurrio un error con la Conexion a la BD";    
    }else if(!existeUsuario($usuario)){
        echo "Usuario Incorrecto";
    }else if(!validarLogin($usuario, $password)){
        echo "Contraseña Incorrecta";
    }else{
        session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["password"] = $password;
    }
}