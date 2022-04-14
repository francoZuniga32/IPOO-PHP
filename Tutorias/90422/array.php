<?php 

$array = ['a', 'b', 'c'];

array_push($array, 'd');


print_r($array);



/*function eliminar($array, $i){
	$parteInicial = array_slice($array, 0, $i);
	$parteFinal = array_slice($array, $i+1);
	
	print_r($parteInicial);
	print_r($parteFinal);
	return array_merge($parteInicial, $parteFinal);
}*/

array_splice($array, 3, 1, "a");

print_r($array);
?>
