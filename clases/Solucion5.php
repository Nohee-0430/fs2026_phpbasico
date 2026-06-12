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
            $v1 = $this->valor1;
            $v2 = $this->valor2;
            
            // Intercambiar si el primero es mayor para que el ciclo funcione siempre de menor a mayor
            if($v1 > $v2){
                $temp = $v1;
                $v1 = $v2;
                $v2 = $temp;
            }
            
            echo "<strong>Los números pares en el rango [$v1, $v2] son:</strong><br><br>";
            $pares = [];
            for ($i = $v1; $i <= $v2; $i++) { 
                if ($i % 2 == 0) {
                    $pares[] = $i;
                }
            }
            
            if (count($pares) > 0) {
                echo implode(", ", $pares);
            } else {
                echo "No hay números pares en este rango.";
            }
        }
        public function verificarMayorMenor(){
            if($this->valor1 > $this->valor2){
                echo "El número mayor es: <strong>$this->valor1</strong><br>El número menor es: <strong>$this->valor2</strong>";
            } elseif ($this->valor2 > $this->valor1) {
                echo "El número mayor es: <strong>$this->valor2</strong><br>El número menor es: <strong>$this->valor1</strong>";
            } else {
                echo "Los números son iguales: <strong>$this->valor1</strong>";
            }
        }
    }
?>