<?php

require 'conexion.php';

function getBanners(){
    return execute("select * from banners");
}