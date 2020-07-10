<?php
    require 'conexion.php';

    session_start();

    $nick = $_POST['nickname'];
    $pass = $_POST['password'];

    $q = "SELECT COUNT(*) AS contar FROM users WHERE nickname = '$nick' and pass = '$pass'";
    $consult = mysqli_query($mysqli,$q);
    $array = mysqli_fetch_array($consult);

    if($array['contar']>0){
        $_SESSION["usuario_logueado"] = $nick;
        header("location: ../views/news.php");
    }
    else{
        $_SESSION["usuario_logueado"] = false;
        header("location: ../index.php?error=Usuario incorrecto");
    }

?>