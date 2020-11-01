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
	if(($_SESSION['entro']) != '15'){
		$var = "Ingrese Sesión como Profesor";
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
	<link rel="stylesheet" type="text/css" href="../css/estilomesajealdoc.css?n=1">
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
<body id="main-container" lang="esp">
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
		<section>
			<form id="main-form" method="POST" action="../php/mostrarmensajealumno2.php">
			<div id="titulo-form">
			<label>Mensajes de Alumnos</label>
			</div>
			<div id="main-container-registro-form-primary">
			
			<table id="tabla">
				<thead>
					<th>Clave</th>
					<th>Matricula</th>
					<th>Asunto</th>
				</thead>
				<tbody id="tabla-body">
				<?php
				$consulta3="SELECT * FROM mensaje_docente WHERE TABLA='alumnos' and ESTATUSBORRAR='1';";
				$resultado3 = mysqli_query($con2, $consulta3);
				while($mostrar=mysqli_fetch_array($resultado3)){
				?>
				<tr id="tablaregistro" onclick="mandar(<?php echo $mostrar['IDMENSAJE']?>)">
					<td id="idmensaje" value="<?php echo $mostrar['IDMENSAJE']?>"><?php echo $mostrar['IDMENSAJE']?></td>
					<td id="materia" value="<?php echo $mostrar['IDMENSAJE']?>"><?php echo $mostrar['REMITENTE']?></td>
					<td id="asunto" value="<?php echo $mostrar['IDMENSAJE']?>"><?php echo $mostrar['ASUNTO']?></td>
				</tr>
				<?php 
					}
				?>
				</tbody>
			</table>
			</div>
			<div id="controlador" hidden="hidden">
			<input type="text" name="oculto" id="oculto">
			<input type="submit" name="enviar" id="enviar" hidden="hidden">
			</div>
			<div id="main-container-registro-form-secondary">
				<script type="text/javascript" src="../js/cambio.js"></script>
			</div>
		</form>
		</section>
		<section>
			<div id="main-container-registro-form-primary-personal">
			<input type="submit" name="volver" id="main-container-loggin-form-submit" value="Volver" onclick="mandaratras2()">	
			</div>
		</section>
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
<script>
function mandar(idmensajeenviado){
		var texto = idmensajeenviado;
		document.getElementById('oculto').value=texto;
		var btn = document.getElementById('enviar');
		btn.click();
	}
</script>
</body>
</html>
<?PHP
}
?>