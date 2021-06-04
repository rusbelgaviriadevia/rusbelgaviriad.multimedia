<?php

$error = $_GET['error'];

	if($error == 1){

		echo "
				<br>
				<h3 style='text-align: center;padding-top:130px;'>
				<span style='color: red;'>
				ERROR 1
				</span>
				: Las contraseñas no coinciden, prueba a registrarte nuevamente!
				</h3>
				<br>
			 ";
	}
	elseif($error == 2){

		echo "
				<br>
				<h3 style='text-align: center;padding-top:130px;'>
				<span style='color: red;'>
				ERROR 2
				</span>
				: Los datos de acceso no son correctos, intenta nuevamente!
				</h3>
				<br>
			 ";
	}
	elseif($error == 3){

		echo "
				<br>
				<h3 style='text-align: center;padding-top:130px;'>
				<span style='color: red;'>
				ERROR 3
				</span>
				: Debe seleccionar un genero!
				</h3>
				<br>
			 ";
	}
	elseif($error == 4){

		echo "
				<br>
				<h3 style='text-align: center;padding-top:130px;'>
				<span style='color: red;'>
				ERROR 4
				</span>
				: Debe llenar todos los campos!
				</h3>
				<br>
			 ";
	}
	elseif($error == 5){

		echo "
				<br style='margin-top: 200px'>
				<h3 style='text-align: center;padding-top:130px;'>
				<span style='color: red;'>
				ERROR 5
				</span>
				: correo ya registrado!
				</h3>
				<br>
			 ";
	}
	elseif($error == 6){

		echo "
				<br style='margin-top: 200px'>
				<h3 style='text-align: center;padding-top:130px;'>
				<span style='color: red;'>
				ERROR 6
				</span>
				: usuario ya registrado!
				</h3>
				<br>
			 ";
	}

?>