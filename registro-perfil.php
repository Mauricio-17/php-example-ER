<?php 
	include("save_profile.php");
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
			<h3>REGISTRO DE PERFIL DE USUARIOS</h3>
			<form name="login" method="POST" role="form" action="save_profile.php">
            <div class="form-group">
             	<label>Perfil de Usuario <span class="required">*</span></label>
				<input type="text" name="nombres" class="form-control">
            </div>
            <div class="form-group">
             	<label>Descripcion <span class="required">*</span></label>
				<input type="text" name="descripcion" class="form-control">
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