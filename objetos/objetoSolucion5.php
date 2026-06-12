<?php

require_once("../clases/Solucion5.php");

$solucion5 = new Solucion5();
$solucion5->setValor1($_POST["num_valor1"]);
$solucion5->setValor2($_POST["num_valor2"]);

$resultado = "";
$titulo_resultado = "";

// Capturamos el output de la clase según la acción solicitada
ob_start();
if (isset($_POST["btn_generar"])) {
    $titulo_resultado = "Números Pares Generados";
    $solucion5->generarNumeros();
} elseif (isset($_POST["btn_mayor_menor"])) {
    $titulo_resultado = "Comparación de Números";
    $solucion5->verificarMayorMenor();
} else {
    // Por defecto si se entra por otro método de envío
    $titulo_resultado = "Resultado de Rango";
    $solucion5->generarNumeros();
}
$resultado = ob_get_clean();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Problema 5</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header class="custom-header text-center">
        <div class="container">
            <h1>Resultado - Problema No. 5</h1>
            <p>Programación Orientada a Objetos</p>
        </div>
    </header>

    <main class="container my-4 animate-fade-in">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="custom-card">
                    <div class="card-header-primary">
                        <h5 class="text-white mb-0"><?php echo $titulo_resultado; ?></h5>
                    </div>
                    <div class="custom-card-body">
                        
                        <div class="result-box">
                            <!-- Inyectamos la salida de la clase -->
                            <?php echo $resultado; ?>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="../index.php" class="btn btn-custom-outline">Volver al Inicio</a>
                            <a href="../form_solucion5.php" class="btn btn-custom-primary">Calcular Otro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p class="mb-0">© 2026 Proyecto PHP Básico FS2026. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>