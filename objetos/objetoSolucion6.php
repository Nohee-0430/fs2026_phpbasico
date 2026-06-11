<?php
    require_once("../clases/Solucion5.php")

    $solucion5 = new Solucion5();
    $solucion5->setValor1($_POST["num_valor1"]);
    $solucion5->setValor2($_POST["num_valor2"]);
    $solucion5->generarNumeros();

    //isset verificamos si se creo (se di click) en btn_generar
    if(isset($_POST["btn_generar"])){
    $solucion5->generarNumeros();
    }

    if(isset($_POST["btn_mayor_menor"]) ){
    $solucion5->verificarMayorMenor();
    }
?>