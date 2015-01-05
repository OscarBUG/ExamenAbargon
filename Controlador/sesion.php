<?php

session_start();

function enSesion(){
    if (empty($_SESSION["usuario"])) {
        header("Location: ../login.php");
    } else {
        $usuario = $_SESSION["usuario"];
        $pass = $_SESSION["pass"];
    }
}

?>