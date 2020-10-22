<?php 

//es un tipo de dato que puede almacenar n datos pero en vez de guardar por indice se le proporciona una llave o nombre a dicho dato

	$arregloColores = array(
			"coche" => "verde",
			"moto" => "roja",
			"avion"=> "gris"
				);

$array= array(1,2,3,4,5);
	// echo $arregloColores['coche']; muestra unicamente un archivo
	//un estructura de control iterativa
	// que usa las llaves o asociaciones de datos com indice

	foreach ($arregloColores as $key) {
		echo $key;
		echo "<br>";
	}
 ?>