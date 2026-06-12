<?php

class Solucion6{

    private $palabra;

    public function setPalabra($palabra){
        $this->palabra = $palabra;
    }

    public function primerCaracter(){

        echo "<table border='1'>";
        echo "<tr><td>".substr($this->palabra,0,1)."</td></tr>";
        echo "</table>";

    }

    public function ultimoCaracter(){

        echo "<table border='1'>";
        echo "<tr><td>".substr($this->palabra,-1)."</td></tr>";
        echo "</table>";

    }

    public function mostrarCaracteres(){

        echo "<table border='1'>";

        for($i = 0; $i < strlen($this->palabra); $i++){

            echo "<tr>";
            echo "<td>".substr($this->palabra,$i,1)."</td>";
            echo "</tr>";

        }

        echo "</table>";

    }

}

?>