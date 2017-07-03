<?php
	//todas las consultas
	class RepositorioUsuario {

		public static function obtenerTodos($conexion) {

			$usuarios = array();

			if(isset($conexion)) { //verificar si se ha conectado
				try {

					include_once 'Usuario.inc.php';
					$sql = "SELECT * FROM usuarios";
					//sentencia prepare escapar de inyecciones sql
					$sentencia = $conexion -> prepare($sql);
					$sentencia -> execute();
					$resultado = $sentencia -> fetchAll();

					if(count($resultado)) {
						foreach ($resultado
						 as $fila) {
							$usuarios[] = new Usuario(
								$fila['id'], $fila['nombre'], $fila['email'], $fila['password'], $fila['fecha_registro'], $fila['activo']
								);
						}
					} else {
						print 'No hay usuarios';
					}

				} catch (PDOException $ex) {
					print "ERROR" . $ex -> getMessage();
				}
			}
			return $usuarios;
		}


		public static function obtenerNumeroUsuarios($conexion) {
			$totalUsuarios = null;

			if(isset($conexion)) {
				try {
					$sql = "SELECT COUNT(*) as total FROM usuarios";
					$sentencia = $conexion -> prepare($sql);
					$sentencia -> execute();
					$resultado = $sentencia -> fetch();

					$totalUsuarios = $resultado['total'];
				} catch (PODException $ex) {
					print "ERROR" . $ex -> getMessage();
				}
			}
			return $totalUsuarios;
		}


	}

?>