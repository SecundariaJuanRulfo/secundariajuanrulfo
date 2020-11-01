<?php
session_start();
?>
<?php
$coment=$_SESSION['coment'];
?>
<!DOCTYPE html>

<html>
<head>
	<title>Inicio | Secundaria Oficial 0986 "Juan Rulfo"</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
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
		<ul id="nombre-nav-2-menu-base">
			<li class="inicio-nav"><a href="../html/index.html">Inicio</a></li><li class="inicio-nav"><a href="../html/nosotros.html">Acerca de nosotros</a></li><li class="inicio-nav"><a href="../html/convocatorias.html">Convocatorias</a></li><li class="inicio-nav"><a href="../html/estudiantes.html">Estudiantes</a></li><li class="inicio-nav"><a href="../html/tramites.html">Trámites y servicios</a></li>
		</ul>
	</nav>
</header>
<div id="main-container-posicion">
	<article id="main-container-content">
	<p id="main-container-content-temp">No hay nada por aquí... <br>Por ahora</p>
	</article>
	<aside id="main-container-loggin">
		<div id="main-container-loggin-align">
			<p id="main-container-loggin-banner">Ingresa a tu Cuenta</p><br>
			<form method="POST" action="../php/verificador.php" id="main-container-loggin-form" autocomplete="off">
  				<label for="nombre" id="etiqueta-nombre">Usuario</label><br> 
  				<input type="text" id="nombre" name="usuario" class="form-elements" placeholder="Ingresa tu Matricula"><br>
  				<label for="password" id="etiqueta-password">Contraseña</label><br> 
  				<input type="password" id="password" name="password" class="form-elements" placeholder="Ingresa tu Contraseña"><br><br>
  				<input id="main-container-loggin-form-warming" value="<?php echo $coment;?>" disabled="disabled"></input>
  					<div id="main-container-loggin-form-submit-center">
  						<input type="submit" name="enviar" id="main-container-loggin-form-submit">
  					</div>
			</form>
	    </div>
	</aside>
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