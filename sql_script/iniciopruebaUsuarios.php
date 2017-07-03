<?php

include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

Conexion :: abrirConexion();
$usuarios = RepositorioUsuario :: obtenerTodos( Conexion :: obtenerConexion());

echo count($usuarios);
Conexion :: cerrarConexion();

?>