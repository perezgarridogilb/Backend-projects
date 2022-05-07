<?php

class Conjunto
{
  private $nombre;
  private $valores;
  public function __construct(string $nombre, $valores)
  {
    $this->nombre = $nombre;
    $this->valores = $valores;
  }
  public function union(Conjunto $conjunto): Conjunto
  {

    foreach ($this->valores as $claves => $elementos) $valores[$claves] = $elementos;
    foreach ($conjunto->getValores() as $claves => $elementos) $valores1[$claves] = $elementos;
    for ($i = 0; $i < count($valores); $i++) {
      $C[$i] = $valores[$i];
    }
    $k = count($valores);
    for ($j = 0; $j < count($valores1); $j++) {
      $C[$k++] = $valores1[$j];
    }
    $AuB = array();
    foreach ($C as $key => $value) {
      if (!in_array($value, $AuB))
        $AuB[$key] = $value;
    }
    return new Conjunto("$this->nombre u $conjunto->nombre", $AuB);
  }
  public function diferencia(Conjunto $conjunto): Conjunto
  {
    $A–B = array();
    $A–B = array_diff($this->valores, $conjunto->getValores());
    foreach ($A–B as $key => $value) {
      if (!in_array($value, $A–B))
        $A–B[$key] = $value;
    }
    return new Conjunto("$this->nombre - $conjunto->nombre", $A–B);
  }
  public function interseccion(Conjunto $conjunto): Conjunto
  {
    $AnB = array();
    $AnB = array_intersect($this->valores, $conjunto->getValores());
    $AnB = array_unique($AnB);
    return new Conjunto("$this->nombre n $conjunto->nombre", $AnB);
  }
  public function getValores()
  {
    return $this->valores;
  }
  public function imprimir()
  {
    $count = 0;
    echo "<b>$this->nombre = { ";
    foreach ($this->valores as $claves => $elementos) {
      if ($count != 0) {
        echo ", ";
      }
      echo $this->valores[$claves];
      $count = 1;
    }
    echo " }<br>";
  }
}