<?php 
	//los operadores lógicos sirven para validar expresiones, 
//tal es el caso del operador or que sirve para validar una sentencia u otra 
	//en el caso del operador and que sirve para validad ambas
	
	$resultado=50;

		if($resultado< 51 and $resultado > 49){
				//echo "es un numero 50 valido";
		}
	$edadvalida=25;

		if ($edadvalida >18 and $edadvalida <26) {
			echo "la edad es valida";
			}
	$sexo="F";
	if ($sexo == 'M' or $sexo=='F') {
		echo "sexo valido";
	}
		//el operador de diferente y la negación
	//operador diferente, sirve para validar que un dato no corresponde a la cantidad o caracter.
	$dato=10;
		if ($dato != 10) {
			echo "es un dato bueno";
		}	

		//la negación sirve para hacer una validación de algo que no ocurre
		$dato2=true;

		if (!$dato2 ) {//negación

			echo "no es verdadero";
			}


 ?>