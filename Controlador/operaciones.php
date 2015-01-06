<?php

require '../Modelo/operaciones.php';

$tipo = $_POST['tipo'];
$tabla = $_POST['tabla'];
$titulo = (empty($_POST['titulo']))?"":$_POST['titulo'];
$datos = (empty($_POST['datos']))?"":$_POST['datos'];

switch ($tipo) {
    case "mostrar":
        $titulos = listado($tabla);
        if($titulos > 0)
        foreach ($titulos as $key => $value) {
            echo '<li>
            <a><div class="tituloLi">'.$value[0].'</div></a>
            <a href="#"><div class="iconEliminar"></div></a>
            <a href="#"><div class="iconModificar"></div></a>
            </li>';
        }
        break;
    case "eliminar":
        echo eliminar($tabla, $titulo);
        break;
    case "guardar":
        echo modificar($tabla, $titulo, $datos);
        break;
    case "cargar":
        echo json_encode(cargar($tabla, $titulo)[0]);
        break;
}