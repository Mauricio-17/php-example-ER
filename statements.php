<?php
// SENTENCIAS SQL SIN PARÁMETROS
$get_perfil_list = "SELECT * FROM perfil";

$get_personal_view = "SELECT p.id_personal, p.nombre, p.apellido, p.email, p.contrasena, pf.nombre AS nombre_perfil, p.id_perfil FROM personal p INNER JOIN perfil pf ON p.id_perfil = pf.id_perfil; ";


?>