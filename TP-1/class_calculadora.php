<?php 
/* 
10. Para cada una de las siguientes clases implementar los métodos de acceso de cada una de las variables
instancias , el método _ _toString() (que permite visualizar los valores que poseen las variables instancia) y por
último, implementar la clase TestNombreClase para probar cada uno de los métodos implementados en cada
clase.
10.a. Diseñar e implementar la clase Calculadora que permite realizar las operaciones básicas: + , - , *, /

*/ 

// creo la clase calculadora
class calculadora{
  //atributos
 private $numero1;
 private $numero2;

// constructor de la clase
 public function __construct($num1,$num2){

  $this->numero1=$num1;
  $this->numero2=$num2;
  
 }

// metodos para acceder a los atributos
 public function getNumero1(){
  return $this->numero1;
 }
 
 public function getNumero2(){
  return $this->numero2;
 }

 //metodos para setear
 public function setNumero1($num1){
  $this->numero1=$num1;
 }

 public function setNumero2($num2){
  $this->numero2= $num2;
 }

 // Metodos de las operaciones basicas
public function suma(){
  return $this->getNumero1() + $this->getNumero2();
}

public function resta(){
  return $this->getNumero1() - $this->getNumero2();
}

public function multiplicacion(){
  return $this->getNumero1() * $this->getNumero2();
}

public function division(){
  if ($this->getNumero2() == 0){
    return "No es posible dividir a un numero por 0";
  }
  return $this->getNumero1() / $this->getNumero2();
}

public function __toString()
{
  return
  "
  la suma de {$this->getNumero1()} + {$this->getNumero2()} es: {$this->suma()}. \n
  la resta de {$this->getNumero1()} - {$this->getNumero2()} es: {$this->resta()}. \n
  la multiplicacion de {$this->getNumero1()} * {$this->getNumero2()} es: {$this->multiplicacion()}. \n
  la division  de {$this->getNumero1()} / {$this->getNumero2()} es: {$this->division()}. \n
  ";
}

}

$objeto = new calculadora(14,7);
echo $objeto;

?>