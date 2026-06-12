<?php

class Solucion1{

    private $nombre;
    private $curso;
    private $nota1;
    private $nota2;
    private $nota3;
    private $nota4;
    private $nota5;

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function setNota1($nota1){
        $this->nota1 = $nota1;
    }

    public function setNota2($nota2){
        $this->nota2 = $nota2;
    }

    public function setNota3($nota3){
        $this->nota3 = $nota3;
    }

    public function setNota4($nota4){
        $this->nota4 = $nota4;
    }

    public function setNota5($nota5){
        $this->nota5 = $nota5;
    }

    public function calcularPromedio(){

        $promedio = (
            $this->nota1 +
            $this->nota2 +
            $this->nota3 +
            $this->nota4 +
            $this->nota5
        ) / 5;

        echo "<h2>Resultado</h2>";
        echo "Nombre: ".$this->nombre."<br>";
        echo "Curso: ".$this->curso."<br>";
        echo "Promedio: ".$promedio;
    }

}

?>