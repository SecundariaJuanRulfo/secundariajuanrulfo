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
		$consulta="SELECT personal.NOMBRE, detalles_personal.CORREO_ELECTRONICO, personal.CLAVE_PERSONAL FROM personal inner join detalles_personal on personal.IDDETALLEDP = detalles_personal.IDDETALLEDP WHERE detalles_personal.CONTRASEÑA='$pass' and personal.CLAVE_PERSONAL='$nombre' 
		and personal.ESTATUSBORRAR='1';";
		$resultado = mysqli_query($con, $consulta);
		global $valor;
		$valor = mysqli_fetch_row($resultado);
		$verificador = mysqli_num_rows($resultado);
		if($verificador==0){
				$coment = "Usuario o Contraseña Incorrecto";
				$_SESSION['coment']=$coment;
				header("location:../php/tramites.php");
		} else{
				/*$var = "Personal Encontrado";
				echo"<script type='text/javascript'>
    			alert('".$var."');
    			window.location.href='../php/tramites.php';
    			</script>";*/
    			$_SESSION['nombreusuario'] = $valor[0];
    			$_SESSION['correousuario'] = $valor[1];
    			$_SESSION['claveusuario'] = $valor[2];
    			$_SESSION['entro'] = "10";
    			header("location:../php/menupersonal.php");
		}
	}else{
			$coment = "Contraseña Incorrecto";
			$_SESSION['coment']=$coment;
			header("location:../php/tramites.php");
	}
}else{
		$coment = "Usuario Incorrecto";
		$_SESSION['coment']=$coment;
		header("location:../php/tramites.php");
}

//mysqli_free_result();
mysqli_close($con);

?>