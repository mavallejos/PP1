<html>
    <head>
        <meta charset="UTF-8">
    <title>Ejercicio 7</title>
    </head>
    <body>
        <?php
        function volcilindro ($radio,$altura) {
            $volumen= 3.1416 * $radio * $radio *$altura;
            echo $volumen;
        }

        volcilindro(25,50);
        ?>
    </body>
</html>