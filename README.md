# fs2026_phpbasico

## Descripcion del proyecto

Proyecto de PHP Basico para FS2026. La pagina principal muestra un menu con tarjetas que enlazan a siete ejercicios realizados con programacion estructurada y programacion orientada a objetos (POO).

El proyecto utiliza Bootstrap para el diseno responsivo y una hoja de estilos personalizada para la presentacion visual de formularios, tarjetas, botones, resultados y tablas.

## Paginas del proyecto

| Pagina | Tipo | Descripcion |
| --- | --- | --- |
| `index.php` | Menu principal | Presenta las tarjetas de navegacion hacia cada ejercicio. Cada tarjeta muestra el numero del problema, nombre, tipo de programacion y boton para ver la solucion. |
| `form_solucion1.php` | POO | Formulario para ingresar el nombre del estudiante, curso y cinco notas. Envia los datos a `objetos/objetoSolucion1.php`, donde se usa la clase `Solucion1` para calcular y mostrar el promedio. |
| `pag2_solucion2.php` | Estructurado | Solicita un numero entero o decimal e indica si es positivo, negativo o neutro. El resultado se muestra en la misma pagina. |
| `form_solucion3.php` | POO | Solicita tres numeros y envia la informacion a `objetos/objetoSolucion3.php`, donde se procesa la comparacion para identificar el mayor, menor y medio. |
| `pag4_solucion4.php` | Estructurado | Solicita un numero entero y genera su tabla de multiplicar del 1 al 10 en una tabla HTML. El resultado aparece debajo del formulario. |
| `form_solucion5.php` | POO | Solicita dos valores numericos y permite generar los numeros pares dentro del rango o verificar cual numero es mayor y cual es menor. Usa `objetos/objetoSolucion5.php` y la clase `Solucion5`. |
| `form_solucion6.php` | POO | Permite seleccionar una palabra de una lista desplegable y mostrar el primer caracter, el ultimo caracter o todos sus caracteres en una tabla. Usa `objetos/objetoSolucion6.php` y la clase `Solucion6`. |
| `pag7_solucion7.php` | Estructurado | Solicita un texto y lo divide en segmentos de dos caracteres. El resultado se muestra en el cuerpo de la pagina separado por barras. |

## Tecnologias utilizadas

| Tecnologia | Descripcion |
| --- | --- |
| HTML | Estructura de las paginas web y formularios. |
| CSS | Estilos personalizados del proyecto. |
| Bootstrap | Framework usado para el diseno responsivo, tarjetas, formularios, tablas y botones. |
| PHP | Procesamiento de formularios, condiciones, ciclos, clases y objetos. |

## Estructura de carpetas

```text
fs2026_phpbasico/
|-- clases/
|   |-- Solucion1.php
|   |-- Solucion3.php
|   |-- Solucion5.php
|   `-- Solucion6.php
|-- css/
|   |-- bootstrap.min.css
|   `-- style.css
|-- js/
|   `-- bootstrap.bundle.min.js
|-- objetos/
|   |-- objetoSolucion1.php
|   |-- objetoSolucion3.php
|   |-- objetoSolucion5.php
|   `-- objetoSolucion6.php
|-- form_solucion1.php
|-- form_solucion3.php
|-- form_solucion5.php
|-- form_solucion6.php
|-- index.php
|-- pag2_solucion2.php
|-- pag4_solucion4.php
`-- pag7_solucion7.php
```

## Como ejecutar el proyecto

1. Copiar o clonar el repositorio dentro de la carpeta `htdocs` de XAMPP.
2. Iniciar Apache desde el panel de control de XAMPP.
3. Abrir el navegador y entrar a:

```text
http://localhost/fs2026_phpbasico/
```

## Autor

Nohelia Barillas  
Carnet: 2024-097536
