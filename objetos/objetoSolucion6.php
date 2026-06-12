<?php

require_once("../clases/Solucion6.php");

$solucion6 = new Solucion6();
$solucion6->setPalabra($_POST["cmb_palabra"]);

$resultado = "";
$titulo_resultado = "";

// Capturamos el output de la clase según la acción solicitada
ob_start();
if (isset($_POST["btn_primer"])) {
    $titulo_resultado = "Primer Carácter de la Palabra";
    $solucion6->primerCaracter();
} elseif (isset($_POST["btn_ultimo"])) {
    $titulo_resultado = "Último Carácter de la Palabra";
    $solucion6->ultimoCaracter();
} elseif (isset($_POST["btn_caracteres"])) {
    $titulo_resultado = "Descomposición en Caracteres";
    $solucion6->mostrarCaracteres();
} else {
    $titulo_resultado = "Resultados del Análisis";
    $solucion6->mostrarCaracteres();
}
$resultado = ob_get_clean();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Problema 6</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header class="custom-header text-center">
        <div class="container">
            <h1>Resultado - Problema No. 6</h1>
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
                    <div class="custom-card-body d-flex flex-column align-items-center">
                        
                        <div class="result-box w-100 text-center d-flex flex-column align-items-center justify-content-center">
                            <!-- Inyectamos la salida de la clase -->
                            <?php echo $resultado; ?>
                        </div>

                        <div class="d-flex justify-content-between mt-4 w-100">
                            <a href="../index.php" class="btn btn-custom-outline">Volver al Inicio</a>
                            <a href="../form_solucion6.php" class="btn btn-custom-primary">Analizar Otra</a>
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