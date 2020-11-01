<?php session_start(); ?>
<?php

include '../php/conexion.php';

$con = conectar();

error_reporting(1);
$nombre=$_POST['usuario'];
$pass = $_POST['password'];
$valor='';

if(isset ($_POST['usuario']) && !empty($_POST['usuario'])){
	if(isset ($_POST['password']) && !empty($_POST['password'])){
		$consulta="SELECT profesores.NOMBRE, detalles_profesores.CORREO_ELECTRONICO, profesores.CLAVE_PERSONAL FROM profesores inner join detalles_profesores on profesores.IDDETALLEP = detalles_profesores.IDDETALLEP WHERE detalles_profesores.CONTRASEÑA='$pass' and profesores.CLAVE_PERSONAL='$nombre' 
		and profesores.ESTATUSBORRAR='1';";
		$resultado = mysqli_query($con, $consulta);
		global $valor;
		$valor = mysqli_fetch_row($resultado);
		$verificador = mysqli_num_rows($resultado);
		if($verificador==0){
				$coment = "Usuario o Contraseña Incorrecto";
				$_SESSION['coment']=$coment;
				header("location:../php/profesores.php");
		} else{
				/*$var = "Docente Encontrado";
				echo"<script type='text/javascript'>
    			alert('".$var."');
    			window.location.href='../php/profesores.php';
    			</script>";*/
    			$_SESSION['nombreusuario'] = $valor[0];
    			$_SESSION['correousuario'] = $valor[1];
    			$_SESSION['claveusuario'] = $valor[2];
    			$_SESSION['entro'] = "15";
    			header("location:../php/menuprofesor.php");

		}
	}else{
			$coment = "Contraseña Incorrecto";
			$_SESSION['coment']=$coment;
			header("location:../php/profesores.php");
	}
}else{
		$coment = "Usuario Incorrecto";
		$_SESSION['coment']=$coment;
		header("location:../php/profesores.php");
}

//mysqli_free_result();
mysqli_close($con);

?>