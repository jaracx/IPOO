<?php
// Diseñar e implementar la clase Reloj que simule el comportamiento de un cronómetro digital (con los comportamientos: puesta_a_cero, incremento, etc.). Cuando el contador llegue a 23:59:59 y reciba el mensaje de incremento deberá pasar a 00:00:00.

class Reloj{
private int $hora;
private int $minutos;
private int $segundos;


public function __construct($hora,$min,$seg){
$this->hora = $hora;
$this->minutos = $min;
$this->segundos = $seg;
}

public function puesta_a_cero(){
  $this->hora = 0;
  $this->minutos = 0;
  $this-> segundos = 0;
}

public function incremento(){
  $this->segundos++;
  if ($this->segundos >=60) {
    $this->segundos=0;
    $this->minutos++;
  }

  if ($this->minutos>=60){
    $this->minutos = 0;
    $this->hora++;
  }

  if ($this->hora>=24) {
    $this->hora=0;
  }
}

public function setHora($hora){
  $this->hora = $hora;
}

public function setMinutos($minutos){
  $this->minutos = $minutos;
}

public function setSegundos($segundos){
  $this->segundos = $segundos;
}

public function getHora(){
  return $this->hora;
}

public function getMinutos(){
  return $this->minutos;
}

public function getSegundos(){
  return $this->segundos;
}

function __toString()
{
  return "La hora es {$this->hora}:{$this->minutos}:{$this->segundos}.";
}
}

$obj = new Reloj(16, 41,32);
echo $obj;


// 7990 + 16980 + 40560

?>