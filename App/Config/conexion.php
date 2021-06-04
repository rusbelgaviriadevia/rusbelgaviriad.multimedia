<?php 
require_once('configurar.php');
$conexion = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
if($conexion->connect_errno){
	echo "<b>Fallo al conectar a la BD: </b>" . $conexion->connect_errno . "---" . $conexion->connect_errno;
}


/*
//#db.php
class Conectar{
	public static function conexion(){
		$conexion = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
		$conexion -> query("SET NAMES 'utf8'");
		return 
		$conexion; 
	}
}
return $conexion;
$conexion = mysqli_connect($host,$user,$pw,$db);
if(!$conexion){
    echo "error en la concexión";
}else{
   echo "conexion exitosa";
}
$objetoMysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASE);

if($conexion->errno) die($conexion->error);

if($objetoMysqli -> connect_errno){
	die("error de conexión:". $objetoMysqli->mysqli_connect_errno() . "," . $objetoMysqli->mysqli_connect_errno());
}
else{
	echo "la conexión tuvo éxito";
}

//#db.php
class Conectar{
	public static function conexion(){
		$conexion = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_DATABASE");
		$conexion -> query("SET NAMES 'utf8'");
		return 
		$conexion; 
	}
}


//#db.php
class Conectar{
	public static function conexion(){
		$conexion = new mysqli ("DB_HOST, DB_USER, DB_PASS, DB_DATABASE");
		$conexion -> query("SET NAMES 'utf8'");
		return 
		$conexion; 
	}
}
*/
if(!$conexion){
    echo "error en la conexión". "<script>
        	alert('fallo en la conexión config');
       		window.history.go(-1);
    		</script>";
}else{
   echo "conexion exitosa config";
}
?>