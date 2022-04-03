<?php

class Mascota{
	public $nombre;
	private $especie;

	public function __construct($nombre, $especie){
		$this->especie = $especie;
		$this->nombre = $nombre;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getEspecie(){
		return $this->especie;
	}
}
?>
