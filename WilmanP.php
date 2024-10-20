
<?php
class saturno {
    
    $masa;
    $anillos;
    $habitable = 'false';
    $gravedad = '7.6';

    


    public function obtenerDimensiones() {

        return "masa: $this->masa, anillos: $this->anillos, habitable: $this->habitable, gravedad: $this->gravedad";

    }

    public function cambiarMasa($nuevaMasa) {

        $this->masa = $nuevaMasa;
        echo("la nueva masa es: " . $nuevaMasa);
    }

    public function cambiarGravedad($nuevaGravedad) {
        
      $this -> gravedad = $nuevaGravedad;
      echo("la nueva gravedad es: " . $nuevaGravedad);

    }

    public function cambiarHabitalidad($Actualizacion) {

        $this->habitable = $Actualizacion;
        echo("el planeta ahora es " . $Actualizacion);:
    }
}

?>





















































