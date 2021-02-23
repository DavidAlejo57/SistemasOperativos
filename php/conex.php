<?php
	$usuario='u8qfmagpk7gaii9q';
	$clave ='ADhO50Z8UKRpVDNTs1yA';
	$servidor='b5dev4ncmojtxhabtc52-mysql.services.clever-cloud.com';
	$base = 'b5dev4ncmojtxhabtc52';
	$l=@mysqli_connect($servidor,$usuario,$clave) or die("Error al conectarse con el servidor");
	@mysqli_select_db($l,$base) or die("Error al conectarse a la bd");
	@mysqli_set_charset($l, 'utf8');
?>