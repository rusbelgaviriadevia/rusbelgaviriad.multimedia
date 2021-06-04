<?php 
if(
	isset($_POST['correo_log']) && !empty($_POST['correo_log']) &&
	isset($_POST['pass_log']) && !empty($_POST['pass_log']) 
 ) 
{
echo "exito de validación";
//validacion de usuarios repetidos

	
	require_once ('cons_correo_log.php');
	
	$verificar_correo_log = mysqli_query($conexion , $cons_correo_log);
	$sesion = mysqli_fetch_array($verificar_correo_log);

	if ($pass_log == $sesion['Contrasena'] ){
		require_once ('session.php');
		echo '<script>
        alert("Inicio de sesion exitoso");
   </script>';
		require_once ('../../../views/user/index.php');

	}

	else{
		 echo '<script>
        alert("combinación erronea");
       window.history.go(-1);
   </script>';
	}

	
}
else{
		 echo '<script>
        alert("debe llenar los datos");
       window.history.go(-1);
   </script>';
	}
/*
	//validar
	require_once('validar_reg.php');

	//consulta para insertar
	require_once ('insertar.php');
	require_once ('inser_reg.php');
	//validacion de usuarios repetidos

	$verificar_usuario = mysqli_query($conexion , "SELECT * FROM registro WHERE Nombre = '$nombre'");

	if(mysqli_num_rows($verificar_usuario)>0){
	 echo "<script>
        alert('Usuario ya registrado Correo');
       window.history.go(-1);
   </script>";

	}
    $verificar_correo = mysqli_query($conexion , "SELECT * FROM registro WHERE Correo = '$correo'");

	if(mysqli_num_rows($verificar_correo)>0){
    echo "<script>
        alert('correo ya registrado Correo');
       window.history.go(-1);
   </script>";
	}
	else{
    	echo "<script>
        alert('registro exitoso controllers');
   		</script>";
    	include ('../../views/front/login.php');
    	*/
?>