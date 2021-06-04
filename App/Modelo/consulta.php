<?php 
$inser_regis = "INSERT INTO registro(Genero , Persona, Nombre, Correo, Contrasena) VALUES ( '$genre' , '$person' , '$nombre' , '$correo' , '$password')";
/*
if(mysqli_num_rows($verificar_usuario)>0){
    echo '<script>
        alert("usuario ya registrado");
       window.history.g(-1);
   </script>';
}
*/
/*
$insertar = "INSERT INTO registro_usuariosunik ( genero, persona, nombre, correo, contraseña, confi_contraseña) VALUE ( 'Hombre' , 'Natural' , 'rusbel' , 'r@d.com' , '1234' , '1234')";
$conexion -> exec($insertar);
if($conexion->errno) die($conexion->error);
*/
?>
