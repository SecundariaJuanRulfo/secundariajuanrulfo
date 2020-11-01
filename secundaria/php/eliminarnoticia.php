<?php
session_start();
?>
<?php

include_once 'google-api-php-client-v2.7.2-PHP7.4/vendor/autoload.php';
include '../php/conexion.php';

error_reporting(1);

$con = conectar();

$idnoticia = $_POST['oculto2'];

$var2 = $idnoticia;
				echo"<script type='text/javascript'>
    			alert('".$var2."');
    			</script>";

	$consulta="UPDATE noticias SET ESTATUSBORRAR='0' WHERE IDNOTICIA='$idnoticia';";
 	$resultado = mysqli_query($con, $consulta);

 	$var = "Noticia Eliminada con Exito";
				echo"<script type='text/javascript'>
    			alert('".$var."');
    			window.location.href='../php/menupersonal.php';
    			</script>";
 ?>