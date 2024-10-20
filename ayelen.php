<?php

class mundo {

    $lunas = "1";
    $gravedad = "9.8";
    $cant_especies;
    $clima;

    public function nuevaespecie($cant_especies){

    $this -> cant_especies = $cant_especies + 1;
    echo("la nueva cantidad de especies es: " . $cant_especies);

    }

    public function cambioclima($nuevoclima){

     $this -> clima = $nuevoclima;
     echo("el nuevo clima es: " . $clima);

    }

    public function nuevaLuna($lunas){

     $this -> lunas = $lunas +1;
     echo("la cantidad de lunas ahora es: " . $lunas);

    }

    public function cambiarGravedad($nuevaGravedad) {
        
        $this -> gravedad = $nuevaGravedad;
        echo("la nueva gravedad es: " . $nuevaGravedad);
  
      }


}

?>