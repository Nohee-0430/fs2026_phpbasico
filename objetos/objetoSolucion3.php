<?php

require_once("../clases/Solucion3.php");

$solucion3 = new Solucion3();

// Corrección de bug: mapear los nombres correctos del formulario
$solucion3->setNumero1($_POST["num_n1"]);
$solucion3->setNumero2($_POST["num_n2"]);
$solucion3->setNumero3($_POST["num_n3"]);

// Capturamos el output de la clase
ob_start();
$solucion3->ordenarNumeros();
$resultado = ob_get_clean();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Problema 3</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header class="custom-header text-center">
        <div class="container">
            <h1>Resultado - Problema No. 3</h1>
            <p>Programación Orientada a Objetos</p>
        </div>
    </header>

    <main class="container my-4 animate-fade-in">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="custom-card">
                    <div class="card-header-primary">
                        <h5 class="text-white mb-0">Resultados del Ordenamiento</h5>
                    </div>
                    <div class="custom-card-body">
                        
                        <div class="result-box">
                            <!-- Inyectamos la salida de la clase -->
                            <?php echo $resultado; ?>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="../index.php" class="btn btn-custom-outline">Volver al Inicio</a>
                            <a href="../form_solucion3.php" class="btn btn-custom-primary">Ordenar Otros</a>
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