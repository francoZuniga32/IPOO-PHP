# TDA

El concepto de Tipo de dato Abstracto puede ser un poco complejo de entender en un comienzo pero vera su utilidad a medida que presentemos ejemplos. Un tipo de dato Abstracto es una abstracion de un elemento en particual el cual tiene; propiedades y formas de actuar sobre estas propiedades. El ejemplo mas practico de una abstracion es un auto. Un auto tiene patente, nombre y color, ademas de sus propias formas de operacines, como pintar, cambiar patente, etc.
¿Como podemos hacer para representar esto en codigo? bueno podemos usar arreglos para esto.

```php

$auto = ['AAA-392', 'bocho', 'rojo'];

```

Pero como podemos hacer para que las funciones actuen sobre el auto que creamos? ¿Como hacemos si tenemos que declarar un arreglo de autos? estos son problemas que si bien podemos resolver comienzan a hacer del codigo algo un poco complejo de entender y sobre todo de mantener. ¿Que pasa si se necesita cambiar el comportamiento del auto? este es el problema que tenemos que resolver.

## Clase
Veremos en mas detalle la clase en otro capitulo pero las usaremos con fines ilustrativos en este punto. Una clase es un molde que nos permite definir los datos y el comportamiento de un TDA. Definamos el auto con una clase:

```php
class Auto{
	privete $patente;
	private $color;
	private $nombre;

	public function __construct($patente, $nombre, $color){
		$this->patente = $patente;
		$this->nombre = $nombre;
		$this->color = $color;
	}

	public function pintar($nuevoColor){
		$this->color = $nuevoColor;
	}
	#demas metodos
}
```
como pueden ver ahora tenemos todo en una clase pero ¿Como se usa? Las clases con moldes que es usado para crear instancias de esa clase los objetos.

## Objetos
Los objetos los veremos mas adelante pero en simples palabras un objeto es una entidad que se desenvuelve en un entorno y actua con otros objetos de su entorno.

Para instanciar objetos de la clase anterior hacemos:

```php 
$auto = new Auto('AAA-234','bocho','rojo');
```

Ahora tenemos un auto que tiene de nombre bocho, patente AAA-234 , y color rojo. ahora podemos pintarlo:
```php 
$auto->pintar('verde');
```

Como vera todo la complejidad de trabajar con datos de este tipo se resuelve implementando un tipo de datos abstracto. Si lleva un tiempo progamando habra momentos en los que su codigo se volvio complejo. Bueno en muchos casos este nivel de complejidad se resuelve con este tipo de abstraciones a nivel de cidigo. Es similar a usar funciones pero mas importente ya que no solo aislamos codigo repedido sino que ahora encapsulamos comportamiento y datos.
El encapsulamiento es un termino importante en programacion. Este consiste en tomar un compotamiento y no dar detalles de como esta echo sino de comousarlo. Esto permite luego modificar el comportamiento sin que se tengan que hacer grandes modificaciones al resto del codigo.
Por ejemplo podemos cambiar el color de una nueva manera reflejando el comportamiento que necesitemos sin que el programador externo sepa que cambio solo sabe como usarlo.


