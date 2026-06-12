<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema No. 2 - Positivo, Negativo o Neutro</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="custom-header text-center">
        <div class="container">
            <h1>Problema No. 2</h1>
            <p>Identificar si un número es Positivo, Negativo o Neutro (Programación Estructurada)</p>
        </div>
    </header>

    <main class="container my-4 animate-fade-in">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="custom-card">
                    <div class="card-header-primary">
                        <h5 class="text-white mb-0">Análisis Numérico</h5>
                    </div>
                    <div class="custom-card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="num_valor" class="form-label">Ingresa un número entero o decimal:</label>
                                <input type="number" step="any" name="num_valor" id="num_valor" class="form-control" required placeholder="Ej. -45, 0, 78" value="<?php echo isset($_POST['num_valor']) ? htmlspecialchars($_POST['num_valor']) : ''; ?>">
                            </div>
                            
                            <div class="d-flex justify-content-between pt-3 border-top">
                                <a href="index.php" class="btn btn-custom-outline">Volver al Inicio</a>
                                <button type="submit" class="btn btn-custom-primary">Mostrar Resultado</button>
                            </div>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num_valor'])) {
                            $num = floatval($_POST['num_valor']);
                            
                            echo '<div class="result-box mt-4 animate-fade-in">';
                            
                            if ($num > 0) {
                                echo "<h4 class='text-success mb-1'>Número Positivo</h4>";
                                echo "<p class='mb-0'>El número <strong>$num</strong> es mayor que cero, por lo tanto es <strong>Positivo</strong>.</p>";
                            } elseif ($num < 0) {
                                echo "<h4 class='text-danger mb-1'>Número Negativo</h4>";
                                echo "<p class='mb-0'>El número <strong>$num</strong> es menor que cero, por lo tanto es <strong>Negativo</strong>.</p>";
                            } else {
                                echo "<h4 class='text-warning mb-1'>Número Neutro</h4>";
                                echo "<p class='mb-0'>El número ingresado es <strong>Neutro (Cero)</strong>.</p>";
                            }
                            
                            echo '</div>';
                        }
                        ?>
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
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>