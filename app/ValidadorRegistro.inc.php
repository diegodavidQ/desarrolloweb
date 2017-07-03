<?php

class ValidadorRegistro {

	private $aviso_inicio;
	private $aviso_cierre;

	private $nombre;
	private $email;

	private $error_nombre;
	private $error_email;
	private $error_password1;
	private $error_password2;

	public function __construct($nombre, $email, $password1, $password2) {
		$this -> aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
		$this -> aviso_cierre = "</div>";


		$this -> nombre = "";
		$this -> email = "";

		$this -> error_nombre = $this -> validar_nombre($nombre);
		$this -> error_email = $this -> validar_email($email);
		$this -> error_password1 = $this -> validar_password1($password1);
		$this -> error_password1 = $this -> validar_password1($password1,$password2);
	}

	private function variable_iniciada($variable) {
		if (isset($variable) && !empty($variable)) {
			return true;
		} else {
			return false;
		}
	}

	private function validar_nombre($nombre) {
		if (!$this -> variable_iniciada($nombre)) {
			return "Debes escribir un nombre de usuario.";
		} else {
			$this -> nombre = $nombre;
		}

		if (strlen($nombre) < 6) {
			return "El nombre debe ser más largo que 6 caracteres.";
		}

		if (strlen($nombre) > 24) {
			return "El nombre no puede ocupar más de 24 caracteres.";
		}
		return "";
	}

	private function validar_email($email) {
		if (!$this -> variable_iniciada($email)) {
			return "Debes escribir un email.";
		} else {
			$this -> email = $email;
		}
		return "";
	}

	private function validar_password1($password1) {
		if (!$this -> variable_iniciada($password1)) {
			return "Debes escribir una contraseña.";
		}
		return "";
	}

	private function validar_password2($password1, $password2) {
		if (!$this -> variable_iniciada($password1)) {
			return "Debes escribir una contraseña.";
		}

		if (!$this -> variable_iniciada($password2)) {
			return "Debes repetir tu contraseña.";
		}

		if($password1 !== $password2) {
			return "Ambas contraseñas deben coincidir";
		}
		return "";
	}



	public function getNombre() {
		return $this -> nombre;
	}

	public function getEmail() {
		return $this -> email;
	}

	public function getErrorNombre() {
		return $this -> error_nombre;
	}

	public function getErrorEmail() {
		return $this -> error_email;
	}

	public function getErrorPassword1() {
		return $this -> error_password1;
	}

	public function getErrorPassword2() {
		return $this -> error_password2;
	}


	public function mostrar_nombre() {
		if ($this -> nombre !== "") {
			echo 'value="'. $this -> nombre. '"';
		}
	}

	public function mostrar_error_nombre() {
		if ($this -> error_nombre !== '') {
			echo $this -> aviso_inicio .$this -> error_nombre . $this -> aviso_cierre;
		}
	}
}


?>