<?php

require_once("../clases/Solucion3.php");

$solucion3 = new Solucion3();

$solucion3->setNumero1($_POST["num1"]);
$solucion3->setNumero2($_POST["num2"]);
$solucion3->setNumero3($_POST["num3"]);

$solucion3->ordenarNumeros();

?>