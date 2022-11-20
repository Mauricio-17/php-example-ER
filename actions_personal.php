<?php
// AQUÍ SE REALIZA EL PROCESO DE ELIMINACIÓN Y EDICIÓN SEGÚN EL NOMBRE DEL SUBMIT QUE RECIBAN AMBAS CONDICIONES
include("conexion.php");

if (isset($_REQUEST['delete'])) {// el nombre "delete" lo lleva asignado en el atributo name del input tipo submit

    $id = $_POST["id"];
    $delete_personal_by_id = "DELETE FROM personal WHERE id_personal = $id ;";

    mysqli_query($conexion, $delete_personal_by_id);
    echo '<h1 style="color:green">Deleted successfully </h1>';

} else if (isset($_REQUEST['edit'])) {// el nombre "edit" lo lleva asignado en el atributo name del input tipo submit
    $id_personal = $_POST["id_personal"];
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $id_perfil = $_POST["id_perfil"];
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ingenieria Web</title>
        <?php include "head.php"; ?>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="call-to-action">
                            <h3>FORMULARIO DE EDICIÓN DE USUARIO</h3>
                            <form name="login" method="POST" role="form" action="listar-usuario.php">
                                <input type="hidden" name="id_personal" value=<?= $id_personal ?>>
                                <div class="form-group">
                                    <label>Nombres <span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control" value=<?= $name ?>>
                                </div>
                                <div class="form-group">
                                    <label>Apellidos <span class="required">*</span></label>
                                    <input type="text" name="lastname" class="form-control" value=<?= $lastname ?>>
                                </div>
                                <div class="form-group">
                                    <label>Email <span class="required">*</span></label>
                                    <input type="text" name="email" disabled class="form-control" value=<?= $email ?>>
                                </div>
                                <div class="form-group">
                                    <label>Perfil <span class="required">*</span></label>
                                    <select name="id_perfil" class="form-control">
                                        <?php
                                        include("select-perfil.php");
                                        ?>
                                    </select>
                                </div>

                                <input type="submit" name="edition" value="GUARDAR" class="btn btn-primary btn-inline">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <br />
                    <figure class="alignnone">
                        <img src="images/img2.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </body>
<?php
}

?>