<?php
/*class Unik{
	public function __construct(){
		$this->modeloUnik = $this->modelo('unik');
	}
	public function index(){

	}
	public function editar($id){
		$this->views('front/articulo') => ["articulo" => $articulo];
	}
	public function agregar(){

	}

}
*/
//conexion
 require_once ('../../Config/conexion.php');

//seccion de login
if(isset($_POST['btn-register'])){

	$genre = $_POST['genre'];
	$person = $_POST['person'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$password = $_POST['password'];
	$conf_pass = $_POST['conf_pass'];

	require_once ('../../Modelo/validar_reg.php');
	
}

//area de usuarios registrados
if(isset($_POST['btn-login'])){
	$correo_log = $_POST['correo_log'];
	$pass_log = $_POST['pass_log'];

	require_once('../../Modelo/validar_log.php');
	}
	else{
		//error 2 = 'los datos de acceso no son correctos!'
		header('Location: http://localhost/Portafolio/views/front/register.php?error=2');
	}
/*
	 echo $genre .	$person . $nombre . $correo . $password . $conf_pass;
	//Validar el genero
	if ($genre == 'genero') {
		//error 3 = 'Debe seleccionar un genero!'
		header('Location: http://localhost/unikmobiliarioimportado/front/register.php?error=3');
	}
		//validar datos
	if($conf_pass == $password){

	 $inser_regis = "INSERT INTO registro( Genero, Persona, Nombre, Correo, Contrasena) VALUE ( '$genre' , '$person' , '$nombre' , '$correo' , '$password')";

		if(!$inser_regis){
    		echo "<script>
        	alert('fallo en el registro controller');
       		window.history.go(-1);
    		</script>";
		}
		else{
    		echo "<script>
        	alert('registro exitoso controllers');
   			 </script>";
    		include ('../../../views/front/login.php');

		}
     
	}
	else{
		//error 1 = 'Las contraseñas no coinciden!'
		header('Location: http://localhost/unikmobiliarioimportado/front/register.php?error=1');
	}
}
	
	
if(isset($_POST['nombre']) && (!empty($_POST['nombre']) && ($_POST['correo']) && (!empty($_POST['correo']) && ($_POST['password']) && (!empty($_POST['password']) && ($_POST['conf_pass']) && (!empty($_POST['conf_pass'])){
	$conexion = mysqli_connect("localhost", "root" , "" ,"registro_usuariosunik" );

if(!$conexion){
    echo "error en la concexión";
}else{
   echo "conexion exitosa";
} 
	}
	else{
		//error 4 = 'Debe llenar todos los campos'
		header('Location: http://localhost/unikmobiliarioimportado/views/front/Formulario/register.php?error=4');
	}
}
*/
//Mensaje enviado
if(isset($_POST['btn-msg'])){
	$nombre = $_POST['genre'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$asunto_msg = $_POST['asunto_msg'];
	$msg = $_POST['msg'];

	if(isset($dest_msg)){
		$fi = fopen("Archivo.txt","a")
		or die("Problemas al crear archivo");

		//fputs();
		//forma segura
		fwrite($fi,"Datos:");
		fwrite($fi,"\n");
		fwrite($fi,$nombre);
		fwrite($fi,"\n");
		fwrite($fi,$correo);
		fwrite($fi,"\n");
		fwrite($fi,$dest_msg);
		fwrite($fi,"\n");
		fwrite($fi,$asunto_msg);
		fwrite($fi,"\n");
		fwrite($fi,$msg);
		fclose($fi);
		echo "datos guardados";

		include ('../../../views/admin/inbox.php');
	}
}

//Leer mensaje
if(isset($_POST['btn-read'])){

	$genre = $_POST['genre'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$dest_msg = $_POST['dest_msg'];
	$asunto_msg = $_POST['asunto_msg'];
	$msg = $_POST['msg'];

	if(isset($dest_msg)){

		include ('../../../views/admin/read.php');
	}
}

//borrar mensaje
if(isset($_POST['borrar'])){

	$filenamee = $_POST['archivo'];
	

	if(isset($filename)){
		unlink($filename);
		echo "El archivo ha sido eliminado con éxito";

		include ('../../../views/admin/read.php');
	}
}

?>