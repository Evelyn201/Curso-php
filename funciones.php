

<?php 
	//funcion normal de php
	function mifuncion(){
		//mostrar un nombre
		$r=array(1);
		return $r;
	}
	//funciones escaleras
	function mifuncion2($valorA,$valorB,$opcion){
		switch ($opcion) {
			case 'suma':
				echo $valorA + $valorB;
				break;
					case 'Resta':
						echo $valorA - $valorB;
						break;
							case 'Multiplicación':
							echo $valorA * $valorB;
								break;
									case 'Divición':
										echo $valorA / $valorB;
										break;
									default:
				# code...
				break;
		}
	}

	echo mifuncion2(5, 10, 'Multiplicación');

 ?>