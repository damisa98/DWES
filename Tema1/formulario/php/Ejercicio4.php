<?php 
        define("pi",3.1416);
        $radio=$_POST['radio'];
        $area=pi*$radio*$radio;
        $longitud=2*pi*$radio;

        echo "El area es : $area <br>";
        echo "La longuitud es : $longitud"
        
    
    ?>