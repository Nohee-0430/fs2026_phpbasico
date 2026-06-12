<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema No. 6 - Caracteres de una Palabra</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="custom-header text-center">
        <div class="container">
            <h1>Problema No. 6</h1>
            <p>Análisis de Caracteres de una Palabra (Programación Orientada a Objetos)</p>
        </div>
    </header>

    <main class="container my-4 animate-fade-in">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="custom-card">
                    <div class="card-header-primary">
                        <h5 class="text-white mb-0">Selección de Palabra</h5>
                    </div>
                    <div class="custom-card-body">
                        <form action="objetos/objetoSolucion6.php" method="post">
                            
                            <div class="mb-4">
                                <label for="cmb_palabra" class="form-label">Selecciona una palabra para analizar:</label>
                                <select name="cmb_palabra" id="cmb_palabra" class="form-select">
                                    <option value="Computadora">Computadora</option>
                                    <option value="Teclado">Teclado</option>
                                    <option value="Monitor">Monitor</option>
                                    <option value="Mouse">Mouse</option>
                                </select>
                            </div>

                            <div class="d-flex flex-column gap-2 pt-3 border-top mt-4">
                                <div class="d-flex flex-wrap gap-2 justify-content-between">
                                    <button type="submit" name="btn_primer" id="btn_primer" class="btn btn-custom-primary flex-grow-1">
                                        Primer Caracter
                                    </button>
                                    <button type="submit" name="btn_ultimo" id="btn_ultimo" class="btn btn-custom-secondary flex-grow-1">
                                        Último Caracter
                                    </button>
                                    <button type="submit" name="btn_caracteres" id="btn_caracteres" class="btn btn-custom-outline flex-grow-1">
                                        Todos los Caracteres
                                    </button>
                                </div>
                                <a href="index.php" class="btn btn-custom-outline w-100 mt-2">Volver al Inicio</a>
                            </div>
                        </form>
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
