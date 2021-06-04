<?php 
session_start();
$_SESSION['username'] = $sesion['Nombre'];
		$correo_log = mysqli_real_escape_string($conexion, (strip_tags($correo_log, ENT_QUOTES)));
	$pass_log = sha1($pass_log);
		if(!isset($_SESSION)){
		mysqli_close($conexion);
		header('Location: http://localhost/unikmobiliarioimportado');
		}
?>