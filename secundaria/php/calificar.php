<?php
session_start();
?>
<?php
include '../php/conexion.php';

$con = conectar();

	error_reporting(1);
	$idmensaje = $_POST['id'];
	$consulta="UPDATE mensaje_alumno SET ATENDIDO = '1' WHERE IDMENSAJE ='$idmensaje' and ESTATUSBORRAR='1';";
    $resultado = mysqli_query($con, $consulta);
    $var = "Mensaje Marcado Como Leido";
				echo"<script type='text/javascript'>
    			alert('".$var."');
    			window.location.href='../php/mostrarmensajepersonal.php';
    			</script>";
?>