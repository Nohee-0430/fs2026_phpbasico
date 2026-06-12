<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Problema No. 4</title>
    </head>
    <body>
        <header>
            <h1>Problema No. 4</h1>
        </header>
        <main>
            <form action="" method="post">
                <label for="">Ingrese un número:</label>
                <input type="num" name="num_valor" id="num_valor">
                <br>
                <br>
                <button type="submit">Mostrar Resultado</button>
            </form>
        </main>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST['numero'];
                echo "<h3>Tabla del $num:</h3>";
                
                for ($i = 1; $i <= 10; $i++) {
                    $resultado = $num * $i;
                    echo "$num x $i = $resultado<br>";
                }
            }
        ?>
    </body>
</html>
