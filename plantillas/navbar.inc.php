
<!-- Fixed navbar 
    <nav class="navbar navbar-default navbar-fixed-top">
    -->   
<!-- Tener en cuenta que esta plantilla contiene codigo php
	que muestra el numero total de usuarios $totalUsuarios
    --> 

    <?php
    	Conexion :: abrirConexion();
		$totalUsuarios = RepositorioUsuario :: obtenerNumeroUsuarios( Conexion :: obtenerConexion());
		Conexion :: cerrarConexion();
    ?>

	<nav class="navbar navbar-default navbar-static-top">
		<!-- <div class="container-fluid"> ocupa todo el ancho de la ventana-->
      	<div class="container">
	        <div class="navbar-header">
		          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		           	</button>
					<a class="navbar-brand" href="#">Pagina Web</a>				
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="#"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Entradas</a></li>
				    <li><a href="#about"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Favoritos</a></li>
				    <li><a href="#contact"> <span class="glyphicon glyphicon-education" aria-hidden="true"></span> Autores</a></li>		
				</ul>
				<ul class="nav navbar-nav navbar-right">

					<!-- Numero de usuarios -->
					<li>
						<a href="#">	
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							<?php
							echo $totalUsuarios;
							?>
						</a>
					</li>

					<li><a href="#"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Iniciar sesión</a></li>
				    <li><a href="registro.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registro</a></li>
				</ul>
			</div>			
		</div>
	</nav>






