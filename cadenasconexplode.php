<?php 

	$var="pedro jimenez lopez";
	$fecha="01-05-2017";
	//explode es una funcion que convierte un string a un arreglo, dependiendo de la construcción pedida
	$datos=explode(" ", $var);
	$f=explode("-", $fecha);

		echo "Es el mes de la fecha es:".$f[1];
	//echo "<pre>";
	//print_r($datos);
	//echo "</pre>";


 ?>