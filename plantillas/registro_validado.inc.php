	<div class="form-group">
		<label>Nombre de usuario</label>
		<input type="text" class="form-control" name="" placeholder="usuario" <?php $validador -> mostrar_nombre(); ?> >
		
		<?php 
		$validador -> mostrar_error_nombre(); 
		?>

	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" name="email" placeholder="email@mail.com">
	</div>
	<div class="form-group">
		<label>Contraseña</label>
		<input type="password" class="form-control" name="password1">
	</div>
	<div class="form-group">
		<label>Repite la contraseña</label>
		<input type="password" class="form-control" name="password2">
	</div>
	<br>
	<button type="reset" class="btn btn-default btn-primary">Limpiar formulario</button>
	<button type="submit" class="btn btn-default btn-primary" name="enviar">Registrarse</button>


