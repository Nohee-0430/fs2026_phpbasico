<?php
    class Solucion5{
        private $valor1;
        private $valor2;

        public function setValor1 ($valor1){
            $this->valor1 = $valor1; 
        }
        public function setValor2 ($valor2){
            $this->valor2 = $valor2; 
        }
        public function generarNumeros(){
            $mayor=0;
            /* esta condicion cambia los valores para que el ciclo funcione
            sin importar cual valor es mayor*/
            if($this->valor1 > $this->valor2){
                $mayor=$this->valor1;
                $this->valor1=$this->valor2;
                $this->valor2=$mayor;
            }
            echo "<br>Los números pares son:";
            for ($i= $this->valor1; $i <= $this->valor2; $i++) { 
                if ($i % 2 == 0) {
                    echo "<br>$i";
                }
            }
        }
        public function verificarMayorMenor(){
            if($this->valo1 > $this->valor2){
                echo "<br> $this->valor1 es mayor que $this->valor2";
                elseif ($this->valo2 > $this->valor1) {
                    echo "<br> $this->valor2 es mayor que $this->valor1";
                }else {
                    echo "<br> Los numeros son iguales";
                }
            }
        }
    }
?>