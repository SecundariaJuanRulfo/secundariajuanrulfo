<?php

	function conectar(){ 

		$DB_HOST = 'bdxad4ch1pjhc03j2ydn-mysql.services.clever-cloud.com';
		$DB_USER = 'uviposxn59alitgs';
		$DB_PASS = 'jN8Q5mJ6r9ePyOy3HAxZ';
		$DB_NAME = 'bdxad4ch1pjhc03j2ydn';
		$DB_CONN = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME) or die ('Servidor no disponible'. mysqli_error());
			

			return $DB_CONN;
	}

?>