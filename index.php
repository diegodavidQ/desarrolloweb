<?php

	include_once 'app/Conexion.inc.php';
	include_once 'app/RepositorioUsuario.inc.php';

	$titulo = 'Desarrollo web';

	//incluir plantilla de inicio html
	include_once 'plantillas/documento_declaracion.inc.php';
	//incluir plantilla navbar
	include_once 'plantillas/navbar.inc.php';
?>		
	<!-- cabecera con la clase jumbotron -->
	<div class="container">
		<div class="jumbotron">
			<h1>Desarrollo de software, redes y ciberseguridad</h1>
			<p>Programación, desarrollo, configuración de redes, ciberseguridad</p>
		</div>
	</div>

	<!-- rejilla -->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
							</div>
							<div class="panel-body">
								<div class="form-group">
									<input type="search" class="form-control" placeholder="Escribir la búsqueda">
								</div>
								<button class="form-control">Buscar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
							</div>
							<div class="panel-body">
								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
							</div>
							<div class="panel-body">
								
							</div>
						</div>
					</div>
				</div>
			</div>			
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span> últimas entradas
					</div>
						<div class="panel-body">				
							<p>Todavía no hay entradas que mostrar</p>
						</div>
				</div>
			</div>
		</div>
		
	</div>

<?php
	//incluir plantilla de cierre html y scripts
	include_once 'plantillas/documento_cierre.inc.php';
?>
