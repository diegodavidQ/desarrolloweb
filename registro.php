<?php

	include_once 'app/Conexion.inc.php';
	include_once 'app/RepositorioUsuario.inc.php';

	include_once 'app/ValidadorRegistro.inc.php'; 
	//validar formulario
	if (isset($_POST['enviar'])) {
		$validador = new ValidadorRegistro($_POST['nombre'],$_POST['email'],$_POST['password1'],$_POST['password2']);
	}

	$titulo = 'Registro';

	include_once 'plantillas/documento_declaracion.inc.php';	
	include_once 'plantillas/navbar.inc.php';
?>	
	
	<div class="container">
		<div class="jumbotron">
			<h1 class="text-center">Formulario de registro</h1>
		</div>		
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Instrucciones
						</h3>
					</div>
					<div class="panel-body">
						<br>
						<p class="text-justify">
							Para registrarte, introduce un nombre de usuario, tu email y contraseña. Recomendación: la contraseña debe contener una combinación de mayúsculas, minúsculas y símbolos.
						</p>
						<br>
						<a href="#">Ya tengo cuenta</a>
						<br>
						<br>
						<a href="#">¿Olvidaste tu contraseña?</a>
						<br>
						<br>
					</div>
				</div>				
			</div>
			<div class="col-md-6 text-center">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							Introduce tus datos
						</h3>
					</div>
					<div class="panel-body">
						<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
							<?php 
								if (isset($_POST['enviar'])) {
									include_once 'plantillas/registro_validado.inc.php';
								} else {
									include_once 'plantillas/registro_vacio.inc.php';
								}
							?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



<?php
	include_once 'plantillas/documento_cierre.inc.php';
?>