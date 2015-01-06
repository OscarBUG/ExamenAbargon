<?php

function conectar() {
    //$host = "mysql.hostinger.mx";
    $host = "localhost";
    $user = "u791284268_root";
    $password = "123456";
    $database = "u791284268_db";

    return mysqli_connect($host, $user, $password, $database);
}

function update($query) {
    $conn = conectar();
    if (!conexion_exitosa($conn))
        return -1;
    $return = mysqli_query($conn, $query);
    cerrar($conn);
    return $return;
}

function error_conexion() {
    return mysqli_connect_error();
}

function conexion_exitosa($conn) {
    return !empty($conn);
}

//Si esta vacio, devuelve false
//Si se produce un error, devuelve un numero negativo (que se interpreta como true)
function execute($query) {
    $conn = conectar();
    if (!conexion_exitosa($conn))
        return -1;
    $result = mysqli_query($conn, $query);
    if(!$result) return -2;
    $return = array();
    while($row = mysqli_fetch_row($result)){
        $return[] = $row;
    }
    cerrar($conn);
    return $return;
}

function cerrar($conn) {
    return mysqli_close($conn);
}
