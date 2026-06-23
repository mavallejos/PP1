<html>
    <head>
        <meta charset="UTF-8">
    <title>Ejercicio 14</title>
    </head>
<body>
    <?php
        
        
        function validar( $nombres, $apellido) {
            if ($nombres == '' ) {
                throw new Exception ('El nombre no puede estar vacio');
            }

            if ($apellido == '') {
                throw new Exception ('El apellido no puede estar vacio');
            }
            
        }
        try {
            $nombres = $_POST['nombres'];   
            $apellido = $_POST['apellido'];

            validar( $nombres, $apellido);

            echo "Los valores ingresados en el formulario son:<br>";
            echo "Nombre: " . $nombres . "<br>";
            echo "Apellido: " . $apellido . "<br>";
            echo "Sexo: " . $_POST['sexo'] . "<br>";
            echo "Estado civil: " . $_POST['ecivil'] . "<br>";
            echo "Recibir informacion: " . $_POST['deseo'] . "<br>";
            echo "Acepto condiciones: " . $_POST['acepto'] . "<br>";

            echo "<br>Datos validos";
        } catch (Exception $e) {
            echo 'Ha habido una excepcion: ' . $e->getMessage();
            echo "<a href='../PP1/EjerciciosPHP/Ejer11.html'>Volver al formulario</a>";
            } 

    ?>

</body>
</html>