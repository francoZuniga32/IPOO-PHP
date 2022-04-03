<?php
include("mascota.php");

class Persona{
	private $tipo_doc;
	private $nro_doc;
	private $nombre;
	private $CP;
	private $mascotas;
	
	public function __construct($tipo_doc, $nro_doc, $nombre, $CP){
		if($nro_doc > 3000000){
			$this->tipo_doc = $tipo_doc;
			$this->nro_doc = $nro_doc;
			$this->nombre = $nombre;
			$this->CP = $CP;
			$this->mascotas = array(); 
		}else{
			return null;
		}
	}

	public function getDoc(){
		return $this->tipo_doc."-".$this->nro_doc;
	}

	public function setNroDoc($nro_doc){
		if($nro_doc > 3000000){
			$this->nro_doc = $nro_doc;
			return $this->nro_doc;
		}else{
			return -1;
		}
	}

	public function agregarMascota($mascota){
		array_push($this->mascotas, $mascota);
	}

	public function listarMascotas(){
		for($i = 0; $i < count($this->mascotas); $i++){
			echo "[".$i." - ".$this->mascotas[$i]->getNombre()." - ".$this->mascotas[$i]->getEspecie()." ]";	
		}
	}

	public function eliminarMascota($i){
		$this->mascotas = $this->eliminar($this->mascotas, $i);
	}

	private  function eliminar($array, $i){                                                                
            	$parteInicial = array_slice($array, 0, $i);                                  
            	$parteFinal = array_slice($array, $i+1);                                                                                 
                                                                                                                                
		return array_merge($parteInicial, $parteFinal);                                                    
	} 

	public function remplazarMascota($i, $mascota){
		$this->mascotas[$i] = $mascota;
	}	
}
# test
$franco = new Persona("DNI", "42321297", "franco", 8300);
$toto = new Mascota("toto", "perro");
$negro = new Mascota("negro", "gato");

$franco->agregarMascota($toto);
$franco->agregarMascota($negro);

echo "\n";
$franco->listarMascotas();
$franco->remplazarMascota(0, new Mascota("paco", "tortuga"));

$franco->listarMascotas();
?>
