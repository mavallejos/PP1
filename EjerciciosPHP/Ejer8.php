<html>
    <head>
        <meta charset="UTF-8">
    <title>Ejercicio 7</title>
    </head>

    <body>
        <?php
        function mayor ($num1,$num2) {
        
        if ($num1>$num2)
            {
                echo "El mayor numero es " . $num1;
            }
            else
            {
                echo "El mayor numero es " . $num2;
            }
        }

        mayor(10,5);
        ?>
        
    </body>
</hmtl>