<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$user = "id19008492_sebasunlocker";    // sera el valor de nuestra BD 
	$clavedb = "10ALf@ROse660120";    // sera el valor de nuestra BD 
	$namedb = "id19008492_web";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_db1 = "dispositivos"; 	   // tabla de usuarios
	

	//error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$user,$clavedb,$namedb);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos...";
	    exit();
	}

?>