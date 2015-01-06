<?php

require_once 'conexion.php';

function getNoticias(){
    return execute("select * from noticias where tipo = '1'")[0];
}