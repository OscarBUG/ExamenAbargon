<?php

require 'conexion.php';

function agregar($tabla, $titulo, $datos){
    $query = "insert into $tabla values('$titulo'";
    foreach ($datos as $key => $value) {
        $query .= ",'$value'";
    }
    $query .= ");";
    return update($query);
}

function eliminar($tabla, $titulo){
    return update("delete from $tabla where titulo='$titulo'" );
}

function listado($tabla){
    return execute("select titulo from $tabla");
}

function cargar($tabla, $titulo){
    return execute("select * from $tabla where titulo='$titulo'");
}

function modificar($tabla, $titulo, $datos){
    $val1 = eliminar($tabla,$titulo);
    $val2 = agregar($tabla, $titulo, $datos);
    return ($val1 && $val2);
}

