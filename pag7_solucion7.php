<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema No. 7 - Texto de 2 en 2</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="custom-header text-center">
        <div class="container">
            <h1>Problema No. 7</h1>
            <p>Dividir Texto en Fragmentos de 2 en 2 (Programación Estructurada)</p>
        </div>
    </header>

    <main class="container my-4 animate-fade-in">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="custom-card">
                    <div class="card-header-primary">
                        <h5 class="text-white mb-0">Fragmentador de Cadenas</h5>
                    </div>
                    <div class="custom-card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="txt_info" class="form-label">Introduce un texto o frase:</label>
                                <input type="text" name="txt_info" id="txt_info" class="form-control" required placeholder="Ej. Bienvenidos a PHP" value="<?php echo isset($_POST['txt_info']) ? htmlspecialchars($_POST['txt_info']) : ''; ?>">
                            </div>
                            
                            <div class="d-flex justify-content-between pt-3 border-top">
                                <a href="index.php" class="btn btn-custom-outline">Volver al Inicio</a>
                                <button type="submit" class="btn btn-custom-primary">Dividir Texto</button>
                            </div>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['txt_info'])) {
                            $texto = $_POST['txt_info'];
                            $longitud = mb_strlen($texto);
                            
                            echo '<div class="result-box mt-4 animate-fade-in text-center">';
                            echo '  <h5 class="mb-3" style="color: var(--primary-color); font-weight: 600;">Resultado de la Segmentación</h5>';
                            echo '  <p class="fs-5 mb-0 fw-bold" style="color: var(--primary-color); letter-spacing: 1px;">';
                            
                            $segmentos = [];
                            for ($i = 0; $i < $longitud; $i += 2) {
                                $segmentos[] = htmlspecialchars(mb_substr($texto, $i, 2));
                            }
                            echo implode(" <span class='text-muted mx-1'>|</span> ", $segmentos);
                            
                            echo '  </p>';
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