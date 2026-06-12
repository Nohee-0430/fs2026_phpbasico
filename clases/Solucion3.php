<?php

class Solucion3{

    private $numero1;
    private $numero2;
    private $numero3;

    public function setNumero1($numero1){
        $this->numero1 = $numero1;
    }

    public function setNumero2($numero2){
        $this->numero2 = $numero2;
    }

    public function setNumero3($numero3){
        $this->numero3 = $numero3;
    }

    public function ordenarNumeros(){

        $numeros = [
            $this->numero1,
            $this->numero2,
            $this->numero3
        ];

        sort($numeros);

        echo "<h2>Resultado</h2>";
        echo "Menor: ".$numeros[0]."<br>";
        echo "Medio: ".$numeros[1]."<br>";
        echo "Mayor: ".$numeros[2];
    }

}

?>