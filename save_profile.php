<?php

include("conexion.php");

$nombre = $_POST["nombres"];
$descripcion = $_POST["descripcion"];

$sql = "INSERT INTO perfil (nombre, descripcion) VALUES ('$nombre','$descripcion')";

mysqli_query($conexion, $sql);



?>