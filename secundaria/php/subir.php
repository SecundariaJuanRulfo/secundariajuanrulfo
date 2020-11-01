<?php

include_once 'google-api-php-client-v2.7.2-PHP7.4/vendor/autoload.php';

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

$archivo = "'https://drive.google.com/file/d/'.$result->id.'/preview'";

}catch(Google_Service_Exception $gs){
 
  $m=json_decode($gs->getMessage());
  echo $m->error->message;

}catch(Exception $e){
    echo $e->getMessage();
  
}
?>
<!DOCTYPE html> 
<html> 
	<head>
		<meta charset="utf-8"/> 
		<title>View PDF jQuery</title>
		<link href="style.css" rel="stylesheet" /> 
	</head> 
<body>
	<div class="container">
		<h1>View PDF with jQuery</h1>
	<div id="viewpdf"> </div> </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="../js/PDFObject-master/pdfobject.min.js"></script> 
	<script>
		var viewer = $('#viewpdf');
		(PDFObject.embed ($archivo, viewer)); 
	</script> 
</body> 
</html>
