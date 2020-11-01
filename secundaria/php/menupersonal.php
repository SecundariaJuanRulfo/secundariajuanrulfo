<?php 
session_start(); 
?>
<?php

include '../php/conexion.php';

	error_reporting(1);
	$nombre = $_SESSION['nombreusuario'];
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
		<div id="menu-personal">
			<a href="../php/carganoticias.php">Subir Actualización</a>
			<a href="../php/vistanoticias.php">Editar Actualización de Ventana Principal</a>
			<a href="../php/vistaconvocatorias.php">Editar Actualización de Convocatorias</a>
			<a href="../php/vistatramites.php">Editar Actualización de Tramites y Servicios</a>
			<a href="../php/vistatramitesprofesores.php">Editar Actualización de Profesores</a>
		</div>
</header>
<div id="main-container-posicion">
	<article id="main-container-content">
	<div id="button-mensajedocente" class="main-container-submit" onclick="abrirmensajealumno2()"><img src="../images/mensajealumno.png">
		<script type="text/javascript" src="../js/cambio.js"></script></div>
	<div id="button-mensajepersonal" class="main-container-submit" onclick="abrirmensajeadocente2()"><img src="../images/mensajeadocente.png" onclick="abrir()">
		<script type="text/javascript" src="../js/cambio.js"></script></div>
	<div id="button-mensajesdocente" class="main-container-submit" onclick="abrirmensajesalumno2()"><img src="../images/mensajesalumno.png">
		<script type="text/javascript" src="../js/cambio.js"></script></div>
	<div id="button-mensajespersonal" class="main-container-submit" onclick="abrirmensajesdocente2()"><img src="../images/mensajededocente.png">
		<script type="text/javascript" src="../js/cambio.js"></script></div>
	<div id="main-container-content-text">
		<label for="mensajedocente" name="etiqueta-mensajedocente" id="mensajedocente">Mensaje a Alumnos</label>
		<label for="mensajepersonal" name="etiqueta-mensajepersonal" id="mensajepersonal">Mensaje a un Docente</label>
		<label for="mensajesdocente" name="etiqueta-mensajesdocente" id="mensajesdocente">Mensajes de Alumnos</label>
		<label for="mensajespersonal" name="etiqueta-mensajespersonal" id="mensajespersonal">Mensajes de Docentes</label>
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
<?php
}
?>