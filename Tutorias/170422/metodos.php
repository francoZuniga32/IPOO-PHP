<?php 

class Empleado{
	private $apellido;
	private $nombre;
	private $legajo;
	private $dni;
	private $fechaNacimiento;

	public __construct($apellido,$nombre, $legajo){
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->legajo = $legajo;
	}

	public getNombreYApllido(){
		return $this->apellido." ".$this->nombre;
	}

	public getDni(){
		return $this->dni;
	}

	public toString(){
		return $this->legajo."-".$this->nombre;
	}

	public getEdad(){
		return $this->calcularEdad($this->fechaNacimiento);
	}

	private calcularEdad($fechaNacimiento){
		return new Date->today() - $this.fechaNacimiento;
	}
}

$pepe = new Empleado('zuniga', 'franco', 'li-8889', '31-08-1998');
$pepe->calcularEdad(new Date->today());
?>
