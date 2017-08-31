<?php
class Persona {
    public $nombre;
    public $apellido;
	public function hablar(){
	    echo "soy ". " ".$this->nombre." y estoy hablando";
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
?>
