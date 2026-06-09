<html>
    <head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
  <?php
    $pais = array(
    array("Argentina", "Español", "Peso Argentino"),
    array("España", "Español", "Euro"),
    array("Estados Unidos", "Inglés", "Dólar")
    );

    echo "La moneda de España es: " . $pais[1][2];
    ?>
</body>
</html>