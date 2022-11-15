<?php
include("conexion.php");
include("save_user.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ingenieria Web</title>
        <?php include "head.php"; ?>
    </head>
    <body>
        <div class="site-wrapper">
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

		<!-- Main -->
		<div class="main" role="main">
			<!-- Page Content -->
			<section class="page-content">
				<div class="container">
					<div class="row">
                    <div class="col-md-6">
			<div class="box">
            <div class="call-to-action">
			<h3>FORMULARIO DE REGISTRO</h3>
			<form name="login" method="POST" role="form" action="registro-usuario.php">
            <div class="form-group">
             	<label>Nombres <span class="required">*</span></label>
				<input type="text" name="nombres" class="form-control">
            </div>
            <div class="form-group">
             	<label>Apellidos <span class="required">*</span></label>
				<input type="text" name="apellidos" class="form-control">
            </div>
            <div class="form-group">
             	<label>Email <span class="required">*</span></label>
				<input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
             	<label>Perfil <span class="required">*</span></label>
				<select name="perfil" class="form-control">
				<?php   
					include("select-perfil.php");
				?>
                </select>
            </div>
			<div class="form-group">
                <label class="pull-left">Contraseña <span class="required">*</span></label>
                <input type="password" name="password" class="form-control">
			</div>
				<button type="submit" name="Enviar" class="btn btn-primary btn-inline">REGISTRAR</button>
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
			</section>
			<!-- Page Content / Fin -->
			<!-- Footer -->
			<?php include "footer.php"; ?>
			<!-- Footer / Fin -->
		</div>
		<!-- Main / Fin -->
	</div>
    </body>
</html>