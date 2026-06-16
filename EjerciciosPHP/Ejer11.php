 
 <html>
    <head>
        <meta charset="UTF-8">
    <title>Ejercicio 11</title>
    </head>
    <body>
        <?php
            class Persona
            {
                private $nombre;
                private $edad;

                function setNombre($nombre){
                    $this-> nombre= $nombre;
                }
               

                function setEdad($edad) {
                      $this-> edad= $edad;
                }
              

                function getNombre() {
                    return $this->nombre;
                }
                

                function getEdad() {
                    return $this->edad ?? 0;
                }
                

                function mostrar() {
                    return $this->nombre . "" . $this->edad;

                }
                
            }

            class Empleado extends Persona 
            {
                private $sueldo;

                function setSueldo ($sueldo) {
                     $this-> sueldo=$sueldo;
                }
               

                function getSueldo() {
                     return $this->sueldo ?? 0;

                }
               
            }


            $e1= new Empleado();
            $e1->setSueldo(123456);
            $e1->setNombre("Claudio");
            $e1->setEdad(18);

            echo $e1->getSueldo();

            echo"<br>";


            $p1= new Persona();
            $p1->setNombre("marco");
            $p1->setEdad(10);
            echo $p1->getNombre();
            echo "<br>";
            echo $p1->getEdad() . "<br>";

            echo $p1->mostrar();
            echo "<br>";
            echo $e1->mostrar();
            ?>
    </body>
</html
