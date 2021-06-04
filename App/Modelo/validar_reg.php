<?php 
if(isset($_POST['genre']) && !empty($_POST['genre']) &&
	isset($_POST['person']) && !empty($_POST['person']) &&
	isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['correo']) && !empty($_POST['correo']) &&
	isset($_POST['password']) && !empty($_POST['password']) &&
	isset($_POST['conf_pass']) && !empty($_POST['conf_pass']) &&
	$_POST['password'] == $_POST['conf_pass']
 ) 
{
echo "exito de validación";
//validacion de usuarios repetidos
	require_once ('cons_usuario.php');
	require_once ('cons_correo.php');
	$verificar_usuario = mysqli_query($conexion , $cons_usuario);
	$verificar_correo = mysqli_query($conexion , $cons_correo);
	if(mysqli_num_rows($verificar_usuario)>0){
	 echo "<script>
        alert('Usuario ya registrado!');
       window.history.go(-1);
   </script>";
	}
	elseif(mysqli_num_rows($verificar_correo)>0){
    echo "<script>
        alert('correo ya registrado!');
       window.history.go(-1);
   </script>";
	}
	else{

	//consulta para insertar
	require_once ('insertar.php');
	require_once ('inser_reg.php');

	
	
    	echo "<script>
        alert('registro exitoso validar');
   		</script>";
    	require_once ('../../../views/front/login.php');

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

	}
	else{
		 echo "<script>
        alert('Verificar que los campos coincidan');
        window.history.go(-1);
    </script>";
	}
?>