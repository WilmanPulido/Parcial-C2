<?php

class _arbolNavidad
{

  $num_bols = '8';
  $color = 'verde';
  $estrella = 'true';
  $valor = '30.000$';

  public function obtenerDimensiones() {
    return "num_bols: $this->num_bols, tipo: $this -> tipo, estrella: $this -> estrella, valor: $this -> valor";
}

public function cambiarColor($nuevoColor) {
    $this->color = $nuevoColor;
    echo("el nuevo color es: " . $nuevoColor);
}

public function sumarNbolas($numeroNuevo) {
$this -> num_bols = num_bols + $numeroNuevo;
echo("el numero nuevo de esferas es: " . $num_bols);
}

public function quitarPonerEstrella ($estrella){
    
    if($this -> estrella == "true"){

     $this -> estrella = "false";
     echo("estrella quitada");

    }else{

        $this -> estrella = "true";
        echo("estrella instalada");

    }
}

}

?>