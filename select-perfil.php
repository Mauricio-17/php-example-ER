<?php
include ("statements.php");
$data = mysqli_query($conexion, $get_perfil_list);

while ($row = mysqli_fetch_assoc($data)) { 
?>
    <option value=<?= $row["id_perfil"] ?>>
        <?= $row["nombre"]  ?>
    </option>
<?php } ?>