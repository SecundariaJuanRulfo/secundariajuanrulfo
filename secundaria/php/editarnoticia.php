<?php
session_start();
?>
<?php

include '../php/conexion.php';

	$con2 = conectar();

	error_reporting(1);
	$nombre = $_SESSION['nombreusuario'];
	$matricula = $_SESSION['claveusuario'];
    $correo = $_SESSION['correousuario'];
    $grado = $_SESSION['gradousuario'];
    $grupo = $_SESSION['grupousuario'];

    $idnoticia = $_POST['oculto'];
    $_SESSION['guia'] = $_POST['oculto'];

    $consulta3="SELECT * FROM noticias WHERE IDNOTICIA ='$idnoticia' and ESTATUSBORRAR='1';";
	$resultado3 = mysqli_query($con2, $consulta3);
	$mostrar=mysqli_fetch_array($resultado3);
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
	<title>Editar Noticia | Secundaria Oficial 0986 "Juan Rulfo"</title>
	<link rel="stylesheet" type="text/css" href="../css/estiloenvionoticia.css?n=1">
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
		<section>
	<form method="POST" action="../php/actualizacionnoticia.php" id="main-form" autocomplete="off" enctype="multipart/form-data">
		<div id="titulo-form">
			<label>Edición de Noticias</label>
		</div>
		<div id="main-container-registro-form-primary">
			<label for="apartado" id="etiqueta-apartado">Apartado</label>
		<select name="apartado" id="apartado" class="form-elements">
			<option value="">Seleciona un Apartado</option>
			<option value="inicio">Ventana Principal</option>
			<option value="convocatorias">Convocatorias</option>
			<option value="profesores">Profesores</option>
			<option value="tramites">Tramites y Servicios</option>
		</select>
		</div>
		<div id="main-container-registro-form-secondary">
			<label for="asunto" id="etiqueta-asunto">Asunto</label>
			<input type="text" name="idnoticia" id="idnoticia" hidden="hidden" class="form-elements" value="<?php echo $idnoticia?>">
			<input type="text" name="asunto" id="asunto" class="form-elements" placeholder="Escribe un Asunto" required="required" value="<?php echo $mostrar['ASUNTO']?>">
		</div>
		<div id="main-container-registro-form-tird">
			<label for="file" id="etiqueta-file">Selecciona un Archivo</label>
		</div>
		<div id="main-container-registro-form-fourt">
			<input name="file" type="file" id="archivo" />
		</div>
		<div id="main-container-textarea">
			<textarea id="area" name="area" placeholder="Escribe tu Mensaje" required="required"><?PHP echo $mostrar['MENSAJE'];?></textarea>
		</div>
		<div id="main-container-loggin-form-submit-center">
			<input type="submit" name="enviar" id="main-container-loggin-form-submit" value="Editar Noticia">
		</div>

	</form>	
	</section>
	<section>
		<div id="main-container-loggin-form-submit-center2">
			<form method="POST" action="../php/eliminarnoticia.php">
				<input type="text" name="oculto2" id="oculto2" hidden="hidden" class="form-elements">
				<input type="submit" name="enviar" id="enviar" value="enviar a eliminar" hidden="hidden">
			</form>
			<input type="submit" name="elimnar" id="main-container-loggin-form-submit" value="Eliminar" onclick="mandar('<?PHP echo $idnoticia?>')">
			<input type="submit" name="volver" id="main-container-loggin-form-submit" value="Volver" onclick="mandaratras3()">
			<script type="text/javascript" src="../js/cambio.js"></script>
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
		document.getElementById('oculto2').value=texto;
		var btn = document.getElementById('enviar');
		btn.click();
	}
</script>
</body>
</html>
<?php 
}
?>