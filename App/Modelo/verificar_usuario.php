<?php 
//validacion de usuarios repetidos
$verificar_usuario = mysqli_query($conexion , "SELECT * FROM registro WHERE Nombre = '$nombre'");
if(mysqli_num_rows($verificar_usuario)>0){
    echo '<script>
        alert("usuario ya registrado");
       window.history.go(-1);
   </script>';
}

?>