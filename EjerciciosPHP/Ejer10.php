<html>
    <head>
        <meta charset="UTF-8">
    <title>Ejercicio 10</title>
    </head>

    <body>
       
        <?php
            class Empleado 
            {
                private $nombre;
                private $sueldo;

                function __construct($nombre,$sueldo) {

                $this->nombre= $nombre;
                $this->sueldo= $sueldo;
                }
                function pagaImpuesto() 
                {
                    if ($this->sueldo > 3000 ) {
                        echo "El empleado " . $this->nombre . "debe pagar impuestos";
                    } else {
                        echo "El empleado " . $this->nombre . "no debe pagar impuestos ";

                    }
                }   
            }
        
            $empleado1= new Empleado ("Juancito", 3500);
            $empleado1 ->pagaImpuesto();
        ?>
    </body>
</hmtl>
