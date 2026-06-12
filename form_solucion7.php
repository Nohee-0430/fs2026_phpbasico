<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema 6</title>
</head>
<body>

<h1>Problema No. 6</h1>

<form action="objetos/objetoSolucion6.php" method="post">

    <label>Seleccione una palabra:</label>

    <select name="cmb_palabra">

        <option value="Computadora">Computadora</option>
        <option value="Teclado">Teclado</option>
        <option value="Monitor">Monitor</option>
        <option value="Mouse">Mouse</option>

    </select>

    <br>
    <br>

    <button type="submit" name="btn_primer">
        Primer carácter
    </button>

    <button type="submit" name="btn_ultimo">
        Último carácter
    </button>

    <button type="submit" name="btn_caracteres">
        Caracteres
    </button>

</form>

</body>
</html>