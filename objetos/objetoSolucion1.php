<?php

require_once("../clases/Solucion1.php");

$solucion1 = new Solucion1();

$solucion1->setNombre($_POST["txt_nombre"]);
$solucion1->setCurso($_POST["txt_curso"]);

$solucion1->setNota1($_POST["nota1"]);
$solucion1->setNota2($_POST["nota2"]);
$solucion1->setNota3($_POST["nota3"]);
$solucion1->setNota4($_POST["nota4"]);
$solucion1->setNota5($_POST["nota5"]);

$solucion1->calcularPromedio();

?>