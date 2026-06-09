<html>
     <head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    </head>
<body>
    <?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";


echo "<tr>";
echo "<td><strong>X</strong></td>"; 
for ($c = 1; $c <= 10; $c++) {
    echo "<td><strong>$c</strong></td>";
}
echo "</tr>";


for ($f = 1; $f <= 10; $f++) {
    echo "<tr>";
    
    
    echo "<td><strong>$f</strong></td>";
    
   
    for ($c = 1; $c <= 10; $c++) {
        $resultado = $f * $c;
        echo "<td>$resultado</td>";
    }
    
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>