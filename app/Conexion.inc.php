<?php

	class Conexion {

		private static $conexion;

		public static function abrirConexion(){
			if(!isset(self::$conexion)) { //comprueba si esta iniciada la conexion
				try {
					include_once 'config.inc.php';
					self::$conexion = new PDO("mysql:host=$nombre_servidor; dbname=$nombre_base_datos", $nombre_usuario, $password); //iniciar conexion
						self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						self::$conexion -> exec("SET CHARACTER SET utf8");

				} catch (PDOExeption $ex) {
					print 'ERROR: '. $ex -> getMessage(). "<br />";
				}
			}
		}

		public static function cerrarConexion() {
			if(isset(self::$conexion)) {
				self::$conexion = null;
			}
		}

		public static function obtenerConexion() {
			return self::$conexion;
		}
	}

//msqli trabaja con mysql
//pdo trabaja con mas bases de datos

?>