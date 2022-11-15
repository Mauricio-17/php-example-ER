<?php

include("conexion.php");

if ($_POST){

    $nombre = $_POST["nombres"];
    $apellido = $_POST["apellidos"];
    $email = $_POST["email"];
    $contrasena = $_POST["password"];
    $id_perfil = $_POST["perfil"];

    $hash = md5($contrasena);

    $sql = "INSERT INTO personal (nombre, apellido, email, contrasena, id_perfil) VALUES ('$nombre','$apellido','$email','$hash', $id_perfil)";

    mysqli_query($conexion, $sql);
}
