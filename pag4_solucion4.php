<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema No. 4 - Tabla de Multiplicar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="custom-header text-center">
        <div class="container">
            <h1>Problema No. 4</h1>
            <p>Generar Tabla de Multiplicar (Programación Estructurada)</p>
        </div>
    </header>

    <main class="container my-4 animate-fade-in">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="custom-card">
                    <div class="card-header-primary">
                        <h5 class="text-white mb-0">Generador de Tabla</h5>
                    </div>
                    <div class="custom-card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="num_valor" class="form-label">Introduce un número entero:</label>
                                <input type="number" name="num_valor" id="num_valor" class="form-control" required placeholder="Ej. 7" value="<?php echo isset($_POST['num_valor']) ? htmlspecialchars($_POST['num_valor']) : ''; ?>">
                            </div>
                            
                            <div class="d-flex justify-content-between pt-3 border-top">
                                <a href="index.php" class="btn btn-custom-outline">Volver al Inicio</a>
                                <button type="submit" class="btn btn-custom-primary">Generar Tabla</button>
                            </div>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['num_valor'])) {
                            $num = intval($_POST['num_valor']);
                            
                            echo '<div class="result-box mt-4 animate-fade-in">';
                            echo '  <h5 class="mb-3 text-center" style="color: var(--primary-color); font-weight: 600;">Tabla del ' . $num . '</h5>';
                            echo '  <div class="d-flex justify-content-center">';
                            echo '      <table class="table table-sm table-hover mb-0" style="max-width: 280px; font-size: 0.95rem;">';
                            echo '          <thead>';
                            echo '              <tr>';
                            echo '                  <th>Operación</th>';
                            echo '                  <th>Resultado</th>';
                            echo '              </tr>';
                            echo '          </thead>';
                            echo '          <tbody>';
                            
                            for ($i = 1; $i <= 10; $i++) {
                                $resultado = $num * $i;
                                echo '          <tr>';
                                echo '              <td>' . $num . ' x ' . $i . '</td>';
                                echo '              <td><strong>' . $resultado . '</strong></td>';
                                echo '          </tr>';
                            }
                            
                            echo '          </tbody>';
                            echo '      </table>';
                            echo '  </div>';
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
