<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Problema no. 7</title>
    </head>
    <body>
        <header>
            <h1>Problema no. 7</h1>
        </header>
        <main>
            <form action="" method="post">
                <label for="">Introduce un texto:</label>
                <br>
                <input type="text" name="txt_info" id="txt_info">
                <br>
                <button type="submit">Mostrar Resultado</button>
            </form>
        </main>
            
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $texto = $_POST['texto'];
            $longitud = mb_strlen($texto);
            echo "<h3>Resultado de 2 en 2:</h3>";
            echo "<p>";
            for ($i = 0; $i < $longitud; $i += 2) {
                echo mb_substr($texto, $i, 2) . " | ";
            }
            echo "</p>";
        }
        ?>
    </body>
</html>