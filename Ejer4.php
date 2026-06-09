<html>
     <head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    $cadena1 ="Comer verduras";
    $cadena2 = "es realmente sano";
    $cadena3= $cadena1 . $cadena2;

    $posicion = strpos($cadena3, "verduras");

    echo "Cadena completa: " . $cadena3 . "<br>";
    echo "la palabra 'verduras' comienza en la posicion: " . $posicion;
    
    ?>
    </body>
</html>