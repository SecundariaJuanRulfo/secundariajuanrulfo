<?php 
session_start();
?>
<?php

include '../php/conexion.php';

	error_reporting(1);
	$nombre = $_SESSION['nombreusuario'];
	if(($_SESSION['entro']) != '5'){
		$var = "Ingrese Sesión como Alumno";
				echo"<script type='text/javascript'>
    			alert('".$var."');
    			window.location.href='../php/index.php';
    			</script>";
	}else{


?>
<!DOCTYPE html>

<html>
<head>
	<title>Inicio | Secundaria Oficial 0986 "Juan Rulfo"</title>
	<link rel="stylesheet" type="text/css" href="../css/estilomenu.css?n=1">
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
	<div id="button-mensajedocente" class="main-container-submit" onclick="abrirmensajeadocente()"><img src="../images/mensajeadocente.png">
		<script type="text/javascript" src="../js/cambio.js"></script></div>
	<div id="button-mensajepersonal" class="main-container-submit" onclick="abrirmensajeapersonal()"><img src="../images/mensajeadepto.png" onclick="abrir()">
		<script type="text/javascript" src="../js/cambio.js"></script></div>
	<div id="button-mensajesdocente" class="main-container-submit" onclick="abrirmensajesdocente()"><img src="../images/mensajededocente.png">
		<script type="text/javascript" src="../js/cambio.js"></script></div>
	<div id="button-mensajespersonal" class="main-container-submit" onclick="abrirmensajespersonal()"><img src="../images/mensajededepto.png">
		<script type="text/javascript" src="../js/cambio.js"></script></div>
	<div id="main-container-content-text">
		<label for="mensajedocente" name="etiqueta-mensajedocente" id="mensajedocente">Mensaje a Docente</label>
		<label for="mensajepersonal" name="etiqueta-mensajepersonal" id="mensajepersonal">Mensaje a un Departamento</label>
		<label for="mensajesdocente" name="etiqueta-mensajesdocente" id="mensajesdocente">Mensajes de Docentes</label>
		<label for="mensajespersonal" name="etiqueta-mensajespersonal" id="mensajespersonal">Mensajes de Departamentos</label>
	</div>
	</article>
	<div id="section-sesion">
		<form action="../php/cerrar.php">
			<input type="submit" name="finsesion" id="main-container-loggin-form-logout" value="Cerrar Sesión">
		</form>
	</div>
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
<?PHP
}
?>