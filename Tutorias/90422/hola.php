<?php
function acelerar(){
	echo "acelerando afuera";
}

class auto{
	private $nombre;
	private $patente;
	private $kms;

	public function __construct($unaPatente, $unNombre, $unosKms){
		$this->nombre = $unaPatente."-".$unNombre;
		$this->patente = $unaPatente;
		$this->kms = $unosKms;
	}

	function setNombre($patente, $unNombre){
		$this->nombre = $patente."-".$unNombre;
	}
	function arrancar(){
		echo $this->nombre." estoy arrancando...";
		$this->acelerar();
	}
	private function acelerar(){
		echo "acelerando...\n";
	}
	
}


$fitito = new auto("123","auto", 34);
$fitito->setNombre("2233","fitito");
$fitito->arrancar(); 
?>
