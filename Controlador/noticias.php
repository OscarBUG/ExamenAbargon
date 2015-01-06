<?php

require 'Modelo/noticias.php';

$noticias = getNoticias();

echo '<h1>' . $noticias[0] . '</h1>
        <p>' . $noticias[1] . '</p>';
