<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Problema No. 2</title>
    </head>
    <body>
        <header>
            <h1>Problema No. 2</h1>
        </header>
        <main>
            <form action="" method="post">
                <label for="">Ingresa un número:</label>
                <input type="number" name="num_valor" id="num_valor">
                <button type="submit" >Mostrar Resultado</button>
            </form>
        </main>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST['numero'];
                
                if ($num > 0) {
                    echo "<p>El número $num es <b>Positivo</b>.</p>";
                } elseif ($num < 0) {
                    echo "<p>El número $num es <b>Negativo</b>.</p>";
                } else {
                    echo "<p>El número es <b>Neutro (Cero)</b>.</p>";
                }
            }
        ?>
    </body>
</html>