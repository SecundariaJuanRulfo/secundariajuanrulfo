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
		$consulta="SELECT alumnos.NOMBRE, detalles_alumnos.CORREO_ELECTRONICO, detalles_alumnos.GRADO, detalles_alumnos.GRUPO, alumnos.MATRICULA FROM alumnos inner join detalles_alumnos on alumnos.IDDETALLEA = detalles_alumnos.IDDETALLEA WHERE detalles_alumnos.CONTRASEÑA='$pass' and alumnos.MATRICULA='$nombre' 
		and alumnos.ESTATUSBORRAR='1';";
		$resultado = mysqli_query($con, $consulta);
		global $valor;
		$valor = mysqli_fetch_row($resultado);
		$verificador = mysqli_num_rows($resultado);
		if($verificador==0){
				$coment = "Usuario o Contraseña Incorrecto";
				$_SESSION['coment']=$coment;
				header("location:../php/index.php");
		} else{
				/*$var = "Alumno Encontrado";
				echo"<script type='text/javascript'>
    			alert('".$var."');
    			window.location.href='../php/index.php';
    			</script>";*/
    			
    			$_SESSION['nombreusuario'] = $valor[0];
    			$_SESSION['correousuario'] = $valor[1];
    			$_SESSION['gradousuario'] = $valor[2];
    			$_SESSION['grupousuario'] = $valor[3];
    			$_SESSION['claveusuario'] = $valor[4];
    			$_SESSION['entro'] = "5";
    			header("location:../php/menualumno.php");
		}
	}else{
			$coment = "Contraseña Incorrecto";
			$_SESSION['coment']=$coment;
			header("location:../php/index.php");
	}
}else{
		$coment = "Usuario Incorrecto";
		$_SESSION['coment']=$coment;
		header("location:../php/index.php");
}

//mysqli_free_result();
mysqli_close($con);

?>