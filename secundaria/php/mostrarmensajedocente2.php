<?php 
session_start(); 
?>
<?php

include '../php/conexion.php';

$con = conectar();
$con2 = conectar();

	error_reporting(1);
	$nombre = $_SESSION['nombreusuario'];
	$matricula = $_SESSION['claveusuario'];
    $correo = $_SESSION['correousuario'];
    $grado = $_SESSION['gradousuario'];
    $grupo = $_SESSION['grupousuario'];
    $idmensaje = $_POST['oculto'];
    $valor='';
    $valor2='';
    $valor3='';

    
    $consulta="SELECT ASUNTO, MENSAJE, URL, REMITENTE, TABLA FROM mensaje_personal WHERE IDMENSAJE ='$idmensaje' and ESTATUSBORRAR='1';";
    $resultado = mysqli_query($con, $consulta);
    global $valor;
    global $valor2;
    global $valor3;
	$valor = mysqli_fetch_row($resultado);

	$consulta2="SELECT * FROM $valor[4] WHERE CLAVE_PERSONAL = '$valor[3]';";
	$resultado2 = mysqli_query($con2, $consulta2);
	$valor3 = mysqli_fetch_row($resultado2);
	if(($_SESSION['entro']) != '10'){
		$var = "Ingrese Sesión como Administrativo";
				echo"<script type='text/javascript'>
    			alert('".$var."');
    			window.location.href='../php/index.php';
    			</script>";
	}else{
?>
<!DOCTYPE html>

<html>
<head>
	<title>Mensajes Recibidos | Secundaria Oficial 0986 "Juan Rulfo"</title>
	<link rel="stylesheet" type="text/css" href="../css/estilomostrarperdoc.css?n=1">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css?n=1">
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/icono.ico">
	<meta charset="utf-8">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
</head>
<body id="main-container">
<header>
	<nav id="navegacion-principal">
		<img id ="navegacion-principal-logo-nav" src="../images/logo2.png">
		<div id="navegacion-principal-nombre-nav">Secundaria Oficial 0986</div>
		<div id="navegacion-principal-nombre-nav-2">"Juan Rulfo"</div>
		<div id="navegacion-principal-seccion">Bienvenido <?php echo $nombre;?></div>
	</nav>
</header>
<div id="main-container-posicion">
	<article id="main-container-content">
	<div id="main-form">
		<div id="main-container-registro-form-tird">
			<br><br>
		</div>
		<div id="main-container-registro-form-materia">
			<label for="remitente" id="etiqueta-remitente">Profesor</label>
			<input type="text" name="remitente" id="remitente" class="form-elements" disabled="disabled" value="<?php echo $valor3[1];?>">
		</div>
		<div id="main-container-registro-form-secondary">
			<label for="asunto" id="etiqueta-asunto">Asunto</label>
			<input type="text" name="asunto" id="asunto" class="form-elements" value="<?php echo $valor[0];?>" disabled="disabled">
		</div>
		<div id="main-container-registro-form-fourt">
			<?php
			if($valor[2] != null){
			?>
			<a href="<?php echo $valor[2];?>" target="_blank">Ver contenido adjunto</a>
			<?php
			}else{
			?>
			<a href="#" disabled="disabled">No Hay Contenido Adjunto</a>
			<?php
			}
			?>
		</div>
		<div id="main-container-textarea">
			<textarea id="area" name="area" disabled="disabled"><?php echo $valor[1];?></textarea>
		</div>
		<div id="main-container-loggin-form-submit-center">
			<input type="submit" name="volver" id="main-container-loggin-form-submit" value="Volver" onclick="mandaratras5()">
			<script type="text/javascript" src="../js/cambio.js"></script>
		</div>

	</div>
	</article>
</div>
<footer id="main-container-footer">
	<div id="main-container-footer-data">
		<div id="main-container-footer-dir1">
			<label>Copyright © 2020 | Proyecto Zulma</label>
		</div>
		<div id="main-container-footer-dir2">
			<label><i>"El aprendizaje es un complemento para el éxito"</i></label>
		</div>
		<div id="main-container-footer-dir2">
			<a href="mailto:hidalgo0020@gmail.com?Subject=Contacto%20con%20la%20escuela"><u>Contacta por Correo Electrónico desde Aquí</u></a>
		</div>
	</div>
	<div id="main-container-footer-direccion">
		<div id="main-container-footer-dir1">
			<label>Calle Mariano Escobedo,</label>
		</div>
		<div id="main-container-footer-dir2">
			<label>Col. Héroes de Tecamac, 55764,</label>
		</div>
		<div id="main-container-footer-dir2">
			<label>Ojo de Agua, Méx.</label>
		</div>
	</div>
</footer>
</body>
</html>
<?php 
}
?>