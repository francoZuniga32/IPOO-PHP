<?php
include("mascota.php");

class Persona{
	#las propiedades del objeto
	#En casi todos los casos el acceso a estas propiedades tiene que ser privado ya que se prodia modificar desde afuera
	#esto violaria algunas restricciones sobre la clase (dni mayores a 3000000 o el codigo postal tiene que ser un numero)
	private $tipo_doc;
	private $nro_doc;
	private $nombre;
	private $CP;
	private $mascotas;

	#el constructor con este definimos la forma que se Instancia un objeto de la clase persona
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
	
	#si queremos definir como se obtienen los datos del objeto podemos definir sus metodo getters
	public function getDoc(){
		return $this->tipo_doc."-".$this->nro_doc;
	}

	#si tenemos algunas restricciones sobre como se insertan datos como que el dni sea un numero mayor a 3000000
	public function setNroDoc($nro_doc){
		if($nro_doc > 3000000){
			$this->nro_doc = $nro_doc;
			return $this->nro_doc;
		}else{
			return -1;
		}
	}
	
	#ahora podemos trabajar con los arreglos
	public function agregarMascota($mascota){
		#esta funcion sirve para poder agregar mascotas
		array_push($this->mascotas, $mascota);
	}
	
	public function listarMascotas(){
		for($i = 0; $i < count($this->mascotas); $i++){
			echo "[".$i." - ".$this->mascotas[$i]->getNombre()." - ".$this->mascotas[$i]->getEspecie()." ]";	
		}
	}

	public function eliminarMascota($i){
		array_splice($this->mascotas, $i, 1);
	}

	public function remplazarMascota($i, $mascota){
		$this->mascotas[$i] = $mascota;
	}	
}
# test

#no podemos instanciar una persona sin un tipo_doc, nro_doc, nombre y CP
$pepe = new Persona();
$franco = new Persona("DNI", "42321297", "franco", 8300);



#De esta manera podemos agregar animales a nuestro antojo
$toto = new Mascota("toto", "perro");
$negro = new Mascota("negro", "gato");

$franco->agregarMascota($toto);
$franco->agregarMascota($negro);

echo "\n";
$franco->listarMascotas();
$franco->remplazarMascota(0, new Mascota("paco", "tortuga"));

$franco->listarMascotas();
?>
