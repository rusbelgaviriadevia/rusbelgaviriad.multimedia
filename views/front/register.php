<?php 
include ('templates/head.php');
if(isset($_GET['error'])){

	include ('../errors/errors.php');
}
include ('Formularios/form_register.php');
include ('templates/footer.php'); 
?>