<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Problema No. 6</title>
    </head>
    <body>
        <header>
            <h1>Problema No. 6</h1>
        </header>
        <main>
                <form action="objetos/objetoSolucion6.php" method="post">
                <label>Seleccione una palabra:</label>
                <br>
                <select name="cmb_palabra">
                    <option value="Computadora">Computadora</option>
                    <option value="Teclado">Teclado</option>
                    <option value="Monitor">Monitor</option>
                    <option value="Mouse">Mouse</option>
                </select>
                <br>
                <br>
                <button type="submit" name="btn_primer" id="btn_primer">
                    Primer caracter
                </button>
                <button type="submit" name="btn_ultimo" id="btn_ultimo">
                    Último caracter
                </button>
                <button type="submit" name="btn_caracteres" id="btn_caracteres">
                    Caracteres
                </button>
            </form>
        </main>
    </body>
</html>
