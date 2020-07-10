<?php

session_start();

if (empty($_SESSION["usuario_logueado"])) {
    header("location: ../index.php?error=Intentaste entrar a una pagina sin estar logeado");
}

?>