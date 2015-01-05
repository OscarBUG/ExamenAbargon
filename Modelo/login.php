<?php

include 'conexion.php';

function nuevoUsuario($usuario, $password) {
    return update("insert into usuarios values('$usuario','$password');");
}

function existeUsuario($usuario) {
    return execute("select * from usuarios where usuario = '$usuario'");
}

function validarLogin($usuario, $password) {
    return execute("select * from usuarios where usuario = '$usuario' and password = '$password'");
}
