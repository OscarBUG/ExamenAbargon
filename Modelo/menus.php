<?php

require_once 'conexion.php';

function getMenus(){
    return execute("select * from menus");
}