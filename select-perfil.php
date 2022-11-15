<?php
$sql = "SELECT * FROM perfil";
$data = mysqli_query($conexion, $sql);

while ($row = mysqli_fetch_assoc($data)) { 
?>
    <option value=<?= $row["id_perfil"] ?>>
        <?= $row["nombre"]  ?>
    </option>
<?php } ?>