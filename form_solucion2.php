<!DOCTYPE html>
<html lang="es">
<head><title>Problema 2</title></head>
<body>
    <form action="" method="post">
        <label for="">Ingresa un número:</label>
        <input type="number" name="num_valor" id="num_valor">
        <button type="submit" >Enviar datos</button>
    </form>

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