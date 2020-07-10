<?php

require 'conexion.php';

$nick = $_POST['nickname'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO users(nickname,email,pass)
        VALUES('$nick','$email','$pass')";
        
$result = mysqli_query($mysqli,$sql);      

$response = [];
if ($result) {
    $response["inserto"] = true;
    $response["mensaje"] = "Se inserto correctamente";
} else {
    $response["inserto"] = false;
    $response["mensaje"] = "No se pude insertar el usuario";
}

header('Content-Type: application/json');
echo json_encode($response);
?>