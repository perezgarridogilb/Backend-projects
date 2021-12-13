<?php

require 'funcs/conexion.php';
require 'funcs/funcs.php';

$user_id = $mysqli->real_escape_string($_POST['user_id']);
$token = $mysqli->real_escape_string($_POST['token']);
$password = $mysqli->real_escape_string($_POST['password']);
$con_password = $mysqli->real_escape_string($_POST['con_password']);

if (validaPassword($password, $con_password)) {
	$pass_hash = hashPassword($password, $con_password);

	if (cambiaPassword($pass_hash, $user_id, $token)) {
		echo 'Ha sido modificado';
		echo "<br><a href='index.php'>Iniciar Sesi&oacute;n</a>";
	} else {
		echo 'Error al mdf passwd';
	}
} else {
	echo 'Las passwd no coincidens';
}
