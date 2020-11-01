﻿
<!DOCTYPE html>

<html>
<head>
	<title>Registro | Secundaria Oficial 0986 "Juan Rulfo"</title>
	<link rel="stylesheet" type="text/css" href="../css/estiloregistro.css">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/icono.ico">
	<meta charset="utf-8">
</head>
<body id="main-container">
<header>
	<nav id="navegacion-principal">
		<img id ="navegacion-principal-logo-nav" src="../images/logo2.png">
		<div id="navegacion-principal-nombre-nav">Secundaria Oficial 0986</div>
		<div id="navegacion-principal-nombre-nav-2">"Juan Rulfo"</div>
		<div id="navegacion-principal-seccion">"Registro de Personal"</div>
	</nav>
</header>
<div id="main-container-posicion">
	<article id="main-container-content">
	<form method="POST" action="../php/regper.php" id="main-form" autocomplete="off">
		<div id="main-container-registro-form-primary">
			<label for="claveper" id="etiqueta-claveper">Clave de Empleado</label>
			<input type="text" name="claveper" id="claveper" class="form-elements">
			<label for="correo" id="etiqueta-correo">Correo Electrónico</label>
			<input type="email" name="correo" id="correo" class="form-elements">
		</div>
		<label for="nombre" id="etiqueta-nombre">Nombre(s)</label>
		<input type="text" name="nombre" id="nombre" class="form-elements">
		<label for="appat" id="etiqueta-appat">Apellido Paterno</label>
		<input type="text" name="appat" id="appat" class="form-elements">
		<label for="apmat" id="etiqueta-apmat">Apellido Materno</label>
		<input type="text" name="apmat" id="apmat" class="form-elements"><br>
		<label for="cargo" id="etiqueta-cargo">Cargo</label>
		<select name="cargo" id="cargo" class="form-elements">
			<option value="">Seleciona un Cargo</option>
			<?php
				include '../php/conexion.php';
				$con = conectar();
				$consulta="SELECT * FROM cargos WHERE ESTATUSBORRAR='1';";
				$resultado = mysqli_query($con, $consulta);
			?>
			<?php foreach ($resultado as $opciones): ?>
				<option value="<?php echo $opciones['IDCARGO']?>"><?php echo $opciones['CARGO']?></option>
			<?php endforeach ?>
		</select>
		<label for="telefono" id="etiqueta-telefono">Número de Teléfono</label>
		<input type="number" name="telefono" id="telefono" class="form-elements"><br>
		<label for="password" id="etiqueta-password">Contraseña</label>
		<input type="text" name="password" id="password" class="form-elements">
		<label for="pregunta" id="etiqueta-pregunta">Pregunta Secreta</label>
		<input type="text" name="pregunta" id="pregunta" class="form-elements">
		<label for="respuesta" id="etiqueta-respuesta">Respuesta</label>
		<input type="text" name="respuesta" id="respuesta" class="form-elements">
		<div id="main-container-loggin-form-submit-center">
			<input type="submit" name="enviar" id="main-container-loggin-form-submit" value="Registrar">
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
