<?php

require 'Modelo/menus.php';

$menus = getMenus();

foreach ($menus as $key => $value) {
    echo '<li class="menu"><a class="boton" target ="'.$value[2].'" '
            . 'href="'.$value[1].'">'.$value[0].'</a></li>';
}