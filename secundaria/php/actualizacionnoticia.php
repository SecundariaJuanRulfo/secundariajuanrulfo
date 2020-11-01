<?php
session_start();
?>
<?php

include_once 'google-api-php-client-v2.7.2-PHP7.4/vendor/autoload.php';
include '../php/conexion.php';

$con = conectar();
error_reporting(1);
$archivo = "";//url
$tabla = $_POST['apartado'];//cargo
$asunto = $_POST['asunto'];
$area = $_POST['area'];
$remitente = $_SESSION['claveusuario'];
$buscar = $_SESSION['guia'];

if($_POST['apartado'] != null){

if ($_FILES['file']['name'] != null) {
//se selecciono un archivo
//configurar variable de entorno
putenv('GOOGLE_APPLICATION_CREDENTIALS=../php/credenciales.json');

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes(['https://www.googleapis.com/auth/drive.file']);
try{
//instanciamos el servicio
$service = new Google_Service_Drive($client);

//ruta al archivo
$file_path = $_FILES["file"]["tmp_name"];

//instacia de archivo
$file = new Google_Service_Drive_DriveFile();
$file->setName($_FILES["file"]["name"]);

//obtenemos el mime type
$finfo = finfo_open(FILEINFO_MIME_TYPE); 
$mime_type=finfo_file($finfo, $file_path);

//id de la carpeta donde hemos dado el permiso a la cuenta de servicio 
$file->setParents(array("1juQACmrB-UIceajg_rrtHrjW-rXiS6JO"));
$file->setDescription('archivo subido desde php');
$file->setMimeType($mime_type);

$result = $service->files->create(
  $file,
  array(
    'data' => file_get_contents($file_path),
    'mimeType' => $mime_type,
    'uploadType' => 'media',
  )
);
//echo '<a href="https://drive.google.com/open?id='.$result->id.'" target="_blank">'.$result->name.'</a>';
global $archivo;
$archivo = "https://drive.google.com/open?id=$result->id";

}catch(Google_Service_Exception $gs){
 
  $m=json_decode($gs->getMessage());
  echo $m->error->message;

}catch(Exception $e){
    echo $e->getMessage();
}
}else{
	//no se selecciono un archivo
  $consulta2="SELECT * FROM noticias WHERE IDNOTICIA='$buscar' and ESTATUSBORRAR ='1';";
  $resultado2 = mysqli_query($con, $consulta2);
  $mostrar = mysqli_fetch_array($resultado2);
	global $archivo;
	$archivo = $mostrar['URL'];
}
  
  

	$consulta="UPDATE noticias SET ASUNTO ='$asunto', MENSAJE ='$area', PANEL ='$tabla', URL= '$archivo' WHERE IDNOTICIA ='$buscar';";
	$resultado = mysqli_query($con, $consulta);

	$var = "Noticia Modificada";
				echo"<script type='text/javascript'>
    			alert('".$var."');
    			window.location.href='../php/menupersonal.php';
    			</script>";
}else{
  $var = "Apartado no seleccionado";
        echo"<script type='text/javascript'>
          alert('".$var."');
          window.location.href='../php/menupersonal.php';
          </script>";
}
?>