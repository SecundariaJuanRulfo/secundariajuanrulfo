<?php 
session_start();
?>
<?php

include '../php/conexion.php';

	error_reporting(1);
	$nombre = $_SESSION['nombreusuario'];
	$matricula = $_SESSION['claveusuario'];
    $correo = $_SESSION['correousuario'];
    $grado = $_SESSION['gradousuario'];
    $grupo = $_SESSION['grupousuario'];

    $con2 = conectar();
	$consulta2="SELECT * FROM cargos WHERE ESTATUSBORRAR='1';";
	$resultado2 = mysqli_query($con2, $consulta2);
	
?>
<!DOCTYPE html>

<html>
<head>
	<title>Mensaje a Administrativo | Secundaria Oficial 0986 "Juan Rulfo"</title>
	<link rel="stylesheet" type="text/css" href="../css/estiloenvioadmin.css?n=1">
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
	<form method="POST" action="../php/envioadmin3.php" id="main-form" autocomplete="off" enctype="multipart/form-data">
		<div id="titulo-form">
			<label>Mensaje a Administrativo</label>
		</div>
		<div id="main-container-registro-form-primary">
			<label for="personal" id="etiqueta-personal">Cargo</label>
		<select name="personal" id="personal" class="form-elements">
			<option value="">Seleciona un Administrativo</option>
			<?php foreach ($resultado2 as $opciones2): ?>
				<option value="<?php echo $opciones2['IDCARGO']?>"><?php echo $opciones2['CARGO']?></option>
			<?php endforeach ?>
		</select>
		</div>
		<div id="main-container-registro-form-secondary">
			<label for="asunto" id="etiqueta-asunto">Asunto</label>
			<input type="text" name="asunto" id="asunto" class="form-elements" placeholder="Escribe un Asunto" required="required">
		</div>
		<div id="main-container-registro-form-tird">
			<label for="file" id="etiqueta-file">Selecciona un Archivo</label>
		</div>
		<div id="main-container-registro-form-fourt">
			<input name="file" type="file" id="archivo" />
		</div>
		<div id="main-container-textarea">
			<textarea id="area" name="area" placeholder="Escribe tu Mensaje"></textarea>
		</div>
		<div id="main-container-loggin-form-submit-center">
			<input type="submit" name="volver" id="main-container-loggin-form-submit" value="Volver" onclick="mandaratras3()">
			<script type="text/javascript" src="../js/cambio.js"></script>
			<input type="submit" name="enviar" id="main-container-loggin-form-submit" value="Enviar Mensaje">
		</div>

	</form>
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
