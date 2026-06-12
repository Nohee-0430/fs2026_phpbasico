<?php

require_once("../clases/Solucion1.php");

$solucion1 = new Solucion1();

$solucion1->setNombre($_POST["txt_nombre"]);
$solucion1->setCurso($_POST["txt_curso"]);

$solucion1->setNota1($_POST["num_nota1"]);
$solucion1->setNota2($_POST["num_nota2"]);
$solucion1->setNota3($_POST["num_nota3"]);
$solucion1->setNota4($_POST["num_nota4"]);
$solucion1->setNota5($_POST["num_nota5"]);

// Capturamos el output de la clase para mostrarlo con diseño
ob_start();
$solucion1->calcularPromedio();
$resultado = ob_get_clean();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Problema 1</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header class="custom-header text-center">
        <div class="container">
            <h1>Resultado - Problema No. 1</h1>
            <p>Programación Orientada a Objetos</p>
        </div>
    </header>

    <main class="container my-4 animate-fade-in">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="custom-card">
                    <div class="card-header-primary">
                        <h5 class="text-white mb-0">Resultados del Cálculo</h5>
                    </div>
                    <div class="custom-card-body">
                        
                        <div class="result-box">
                            <!-- Inyectamos la salida de la clase -->
                            <?php echo $resultado; ?>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="../index.php" class="btn btn-custom-outline">Volver al Inicio</a>
                            <a href="../form_solucion1.php" class="btn btn-custom-primary">Calcular Otro</a>
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