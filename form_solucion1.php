<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema No. 1 - Promedio de Notas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="custom-header text-center">
        <div class="container">
            <h1>Problema No. 1</h1>
            <p>Promedio de Notas de Estudiante (Programación Orientada a Objetos)</p>
        </div>
    </header>

    <main class="container my-4 animate-fade-in">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="custom-card">
                    <div class="card-header-primary">
                        <h5 class="text-white mb-0">Formulario de Registro de Calificaciones</h5>
                    </div>
                    <div class="custom-card-body">
                        <form action="objetos/objetoSolucion1.php" method="post">
                            <div class="row g-3">
                                <!-- Datos del estudiante -->
                                <div class="col-12 col-md-6">
                                    <label for="txt_nombre" class="form-label">Nombre del Estudiante:</label>
                                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" required placeholder="Ej. Juan Pérez">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="txt_curso" class="form-label">Curso / Asignatura:</label>
                                    <input type="text" name="txt_curso" id="txt_curso" class="form-control" required placeholder="Ej. Programación Web">
                                </div>

                                <div class="col-12 mt-4">
                                    <h6 class="text-secondary border-bottom pb-2">Ingreso de Calificaciones</h6>
                                </div>

                                <!-- Calificaciones -->
                                <div class="col-6 col-md-4">
                                    <label for="num_nota1" class="form-label">Nota 1:</label>
                                    <input type="number" name="num_nota1" id="num_nota1" class="form-control" min="0" max="100" required placeholder="0-100">
                                </div>
                                <div class="col-6 col-md-4">
                                    <label for="num_nota2" class="form-label">Nota 2:</label>
                                    <input type="number" name="num_nota2" id="num_nota2" class="form-control" min="0" max="100" required placeholder="0-100">
                                </div>
                                <div class="col-6 col-md-4">
                                    <label for="num_nota3" class="form-label">Nota 3:</label>
                                    <input type="number" name="num_nota3" id="num_nota3" class="form-control" min="0" max="100" required placeholder="0-100">
                                </div>
                                <div class="col-6 col-md-4">
                                    <label for="num_nota4" class="form-label">Nota 4:</label>
                                    <input type="number" name="num_nota4" id="num_nota4" class="form-control" min="0" max="100" required placeholder="0-100">
                                </div>
                                <div class="col-6 col-md-4">
                                    <label for="num_nota5" class="form-label">Nota 5:</label>
                                    <input type="number" name="num_nota5" id="num_nota5" class="form-control" min="0" max="100" required placeholder="0-100">
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-4 pt-3 border-top">
                                <a href="index.php" class="btn btn-custom-outline me-2">Volver al Inicio</a>
                                <button type="submit" class="btn btn-custom-primary">Calcular Promedio</button>
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