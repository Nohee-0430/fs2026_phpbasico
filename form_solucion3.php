<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema No. 3 - Ordenar Tres Números</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="custom-header text-center">
        <div class="container">
            <h1>Problema No. 3</h1>
            <p>Ordenar Tres Números de Menor a Mayor (Programación Orientada a Objetos)</p>
        </div>
    </header>

    <main class="container my-4 animate-fade-in">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="custom-card">
                    <div class="card-header-primary">
                        <h5 class="text-white mb-0">Entrada de Valores</h5>
                    </div>
                    <div class="custom-card-body">
                        <form action="objetos/objetoSolucion3.php" method="post">
                            
                            <div class="mb-3">
                                <label for="num_n1" class="form-label">Primer Número:</label>
                                <input type="number" name="num_n1" id="num_n1" class="form-control" required placeholder="Ingresa un número entero">
                            </div>

                            <div class="mb-3">
                                <label for="num_n2" class="form-label">Segundo Número:</label>
                                <input type="number" name="num_n2" id="num_n2" class="form-control" required placeholder="Ingresa otro número entero">
                            </div>

                            <div class="mb-3">
                                <label for="num_n3" class="form-label">Tercer Número:</label>
                                <input type="number" name="num_n3" id="num_n3" class="form-control" required placeholder="Ingresa un tercer número entero">
                            </div>

                            <div class="d-flex justify-content-between pt-3 border-top mt-4">
                                <a href="index.php" class="btn btn-custom-outline">Volver al Inicio</a>
                                <button type="submit" class="btn btn-custom-primary">Mostrar Resultado</button>
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
