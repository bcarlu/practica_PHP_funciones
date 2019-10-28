<?php

function operaciones($numero1,$numero2,$operador = "suma"){
  if($operador == "suma"){
    echo "La suma de $numero1 + $numero2 es igual a: ".($numero1 + $numero2)."<br>";
  }
  elseif ($operador == "resta") {
    echo "La resta de $numero1 - $numero2 es igual a: ".($numero1 - $numero2)."<br>";
  }
  elseif ($operador == "multiplicacion") {
    echo "La multiplicacion de $numero1 * $numero2 es igual a: ".($numero1 * $numero2)."<br>";
  }
  elseif ($operador == "division") {
    echo "La division de $numero1 / $numero2 es igual a: ".($numero1 / $numero2)."<br>";
  }
}