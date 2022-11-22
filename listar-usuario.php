<?php
include("conexion.php");
if (isset($_REQUEST['edition'])) { // el nombre "edition" lo lleva asignado en el atributo name del input tipo submit

    $id_personal = $_POST["id_personal"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $id_perfil = $_POST["id_perfil"];

    $update_usuario = "UPDATE personal SET nombre='$name', apellido='$lastname', id_perfil=$id_perfil WHERE id_personal = $id_personal ;";

    mysqli_query($conexion, $update_usuario);
    
}
if (isset($_REQUEST['delete'])) {// el nombre "delete" lo lleva asignado en el atributo name del input tipo submit

    $id = $_POST["id"];
    $delete_personal_by_id = "DELETE FROM personal WHERE id_personal = $id ;";

    mysqli_query($conexion, $delete_personal_by_id);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST</title>
    <?php
    include("head.php");
    ?>
    <!--  -->

</head>
<body>
    <!-- Header -->
    <header class="header header-default">
        <div class="header-top">
            <div class="container">
                <div class="header-top-right">
                    <span class="login">
                        <i class="fa fa-lock"></i> <a href="#">Login</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <!-- Logo -->
                <?php include "logo.php"; ?>
                <!-- Logo / Fin -->
                <button type="button" class="navbar-toggle">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Menu -->
                <?php include "menu.php"; ?>
                <!-- Menu / Find -->

            </div>
        </div>
    </header>
    <!-- Header / Fin -->

    <div class="container">


        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>EMAIL</th>
                    <th>CONTRASEÑA</th>
                    <th>PERFIL</th>
                    <th>EDITAR</th>
                    <th>REMOVER</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("get-personal.php");
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>EMAIL</th>
                    <th>CONTRASEÑA</th>
                    <th>PERFIL</th>
                    <th>EDITAR</th>
                    <th>REMOVER</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <?php
    include("footer.php");
    ?>

</body>

</html>