<?php
	error_reporting(1);
	date_default_timezone_set('America/El_Salvador');

	// BASE DE LOCAL
    $server ="localhost";
    $username ="root";
    $password ="";
    $database ="MaGiCaEn";
    
    global $conexion;
	$conexion = new PDO("mysql:host=" . $server . ";dbname=". $database .";charset=UTF8", $username, $password);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    function Query($query){
		global $conexion;
		if ($resultSet = $conexion->query($query)) {
			return $resultSet;
		}
		else{
			return false;
		}
	}

	function countQuery($query){
		$data = Query($query);	
		$i = 0;
		foreach ($data as $row) {
			$i++;
		}
		return $i; 
	}
?>