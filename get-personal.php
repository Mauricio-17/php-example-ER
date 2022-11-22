<?php
include("conexion.php");
include("statements.php");

$data = mysqli_query($conexion, $get_personal_view);




while ($row = mysqli_fetch_assoc($data)) {
?>
    <tr>
        <td><?= $row["id_personal"]  ?></td>
        <td><?= $row["nombre"]  ?></td>
        <td><?= $row["apellido"]  ?> </td>
        <td><?= $row["email"]  ?></td>
        <td><?= $row["contrasena"]  ?></td>
        <td><?= $row["nombre_perfil"]  ?></td>
        <td>
            <form action="actions_personal.php" method="POST">
                <input type="hidden" name="id_personal" class="btn btn-danger" value=<?= $row["id_personal"] ?>>
                <input type="hidden" name="name" value=<?= $row["nombre"] ?>>
                <input type="hidden" name="lastname" value=<?= $row["apellido"] ?>>
                <input type="hidden" name="email" value=<?= $row["email"] ?>>
                <input type="hidden" name="id_perfil" value=<?= $row["id_perfil"] ?>>

                <input type="submit" name="edit" value="EDITAR" class="btn btn-warning">
            </form>
        </td>
        <td width="50">
            <form action="listar-usuario.php" method="POST">
                <input type="hidden" name="id" value=<?= $row["id_personal"] ?>>
                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
            </form>
        </td>

    </tr>
<?php } ?>