<?php
class Persona {
    public $nombre;
    public $apellido;
	public function hablar(){
	    echo "soy ". " ".$this->nombre." y estoy hablando";
	}
	public function acariciar($perrito){
   $perrito->moverCola();
	}
	
}
class Perro {
	public $nombre;
	public function moverCola(){
	    echo "muevo la Cola";
	}
}
$p = new Persona();
$p->nombre = "Micaela";
$p->apellido = "Baravalle";

$p1= new Persona();
$p1->nombre = "Juan";
$p1->apellido = "Perez"; 
echo $p->nombre . "<br>";
echo "Hola"." ". $p->nombre. ", Hola ".$p1->nombre;
echo "<br>";
$p->hablar();
echo "<br>";
$p1->hablar();
$perro = new Perro();
echo "<br>";
$perro-> moverCola();
echo "<br>";
$p->acariciar($perro);
?>
