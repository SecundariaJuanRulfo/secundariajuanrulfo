<?php session_start(); ?>
<?php

include '../php/conexion.php';

	error_reporting(1);
 	$coment = $_SESSION['coment'];

?>
<!DOCTYPE html>

<html>
<head>
	<title>Inicio | Secundaria Oficial 0986 "Juan Rulfo"</title>
	<link rel="stylesheet" type="text/css" href="../css/estilonosotros.css?n=1">
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
		<ul id="nombre-nav-2-menu-base">
			<li class="inicio-nav"><a href="../php/index.php">Inicio</a></li><li class="inicio-nav"><a href="../php/nosotros.php">Acerca de nosotros</a></li><li class="inicio-nav"><a href="../php/convocatorias.php">Convocatorias</a></li><li class="inicio-nav"><a href="../php/profesores.php">Profesores</a></li><li class="inicio-nav"><a href="../php/tramites.php">Trámites y servicios</a></li>
		</ul>
	</nav>
</header>
<div id="main-container-posicion">
	<article id="main-container-content">
		<div id="centrar-date">
			<p class="titulo">Escuela fundada el 16 agosto de 2004<br><br></p>
		</div>
	<p class="datos">Cuenta al día de hoy con una matricula de 30 docentes perfectamente capacitados, con el objetivo de hacer trascender a la comunidad estudiantil más allá de sus límites.<br><br></p>
	<p class="datos">Con un total de 18 grupos: 12 en el turno matutino y 6 en el turno vespertino, con un taller de Ofimática donde, se prepara a las futuras generaciones adentrándolos al mundo de la tecnología un paso a la vez.<br><br><br></p>
	<div id="foto">
		<img src="../images/mural.jpg">
	</div>
	<br><br>
	<div id="centrar-mision">
		<p class="titulo">Misión<br><br></p>
	</div>
	<p class="datos">Somos una institución educativa de nivel básico que ofrece a la comunidad un servicio eficiente y de calidad, que promueve la adquisición de conocimientos, desarrollo de habilidades, el fomento y la práctica de hábitos y valores.<br><br></p>
	<div id="centrar-vision">
		<p class="titulo">Visión<br><br></p>
	</div>
	<p class="datos">Consolidarnos como una institución de calidad, fundamentada en el compromiso profesional del personal docente para formar alumnos competentes.<br><br><br></p>
	<p class="datos">Comprometidos con fomentar los valores: respeto, honestidad, responsabilidad, tolerancia, justicia, empatía, amor, inclusión. Esenciales para entablar relaciones sanas, entre alumnos y en general, como seres humanos.<br><br></p>
	<p class="datos">Para el desarrollo cultural y social de nuestra comunidad escolar, nos esforzamos en realizar diversos eventos en el transcurso del año escolar, tales como:<br><br><br></p>
	<div id="lista-eventos">
	<ul class="datos">
		<li>Programa Nacional de Convivencia Escolar.</li>
		<li>Mañana deportivo.</li>
		<li>Reina de la primavera.</li>
		<li>Taller para padres.</li>
		<li>Kermés.</li>
		<li>Evento navideño.</li>
		<li>Exposición de trabajos.</li>
		<li>Festejo del 10 de mayo.</li>
		<li>Festejo del día del estudiante.</li>
		<li>Simulacros.</li>
	</ul>
	</div>
	<p class="datos"><br><br>Además, contamos con un mural representativo de la institución, el cual fue pintado el 30 de septiembre del 2010 por el Ingeniero Sergio Martínez.<br></p>
	<p class="datos">Puedes encontrarnos en: <br><br></p>
	<P class="datos">Calle Mariano Escobedo, Col. Héroes de Tecámac, 55764 Ojo de Agua, Méx.<br></P>
	<P class="datos">Y puedes contactarnos al teléfono: <br><br></P>
	<P class="datos">55 1313 4788<br><br></P>
	<div id="centrar-slogan">
	<P class="titulo">“El aprendizaje es un complemento para el éxito”<br><br></P>
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
