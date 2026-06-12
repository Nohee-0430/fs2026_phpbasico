<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema No. 5 - Rango y Mayor/Menor</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="custom-header text-center">
        <div class="container">
            <h1>Problema No. 5</h1>
            <p>Generación de Rango de Pares y Mayor/Menor (Programación Orientada a Objetos)</p>
        </div>
    </header>

    <main class="container my-4 animate-fade-in">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="custom-card">
                    <div class="card-header-primary">
                        <h5 class="text-white mb-0">Entrada de Parámetros</h5>
                    </div>
                    <div class="custom-card-body">
                        <form action="objetos/objetoSolucion5.php" method="post">
                            
                            <div class="mb-3">
                                <label for="num_valor1" class="form-label">Primer Valor:</label>
                                <input type="number" name="num_valor1" id="num_valor1" class="form-control" required placeholder="Ej. 10">
                            </div>

                            <div class="mb-3">
                                <label for="num_valor2" class="form-label">Segundo Valor:</label>
                                <input type="number" name="num_valor2" id="num_valor2" class="form-control" required placeholder="Ej. 20">
                            </div>

                            <div class="d-flex flex-column gap-2 pt-3 border-top mt-4">
                                <div class="d-flex gap-2 justify-content-between">
                                    <button type="submit" name="btn_generar" class="btn btn-custom-primary flex-grow-1">Generar Números Pares</button>
                                    <button type="submit" name="btn_mayor_menor" class="btn btn-custom-secondary flex-grow-1">Verificar Mayor/Menor</button>
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