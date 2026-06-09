<html>
    <head>
        <meta charset="UTF-8">
    <title>Ejercicio 7</title>
    </head>
<body>
    <?php
        echo "Los valores ingresados en el formulario son: " . '<br>';
        echo ' Nombre ' . $_POST ['nombres'] . '<br>';
        echo 'Apellido ' . $_POST ['apellido'] . '<br>';
        echo 'Sexo ' . $_POST ['sexo'] . '<br>';
        echo 'Estado civil ' . $_POST ['ecivil'] . '<br>';
        echo 'Recibir informacion ' . $_POST ['deseo'] . '<br>';
        echo 'Acepto condiciones ' . $_POST ['acepto'] . '<br>';
    ?>

</body>
</html>