<?php

require 'Modelo/banners.php';

$banners = getBanners();

foreach ($banners as $key => $value) {
    echo '<a class="banner" href="'.$value[1].'">'
    . '<img src="'.$value[2].'" alt="'.$value[0].'" /></a>';
}