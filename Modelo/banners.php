<?php

require_once 'conexion.php';

function getBanners(){
    return execute("select * from banners");
}