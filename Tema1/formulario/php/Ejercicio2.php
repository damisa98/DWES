<?php 
        $x=$_POST['x'];
        $y=$_POST['y'];
        $suma=$x+$y;
        $resta=$x-$y;
        $mul=$x*$y;
        $divi=$x/$y;

        echo 'La suma es : '. $suma. "<br>";
        echo 'La resta es : '. $resta. "<br>";
        echo 'La multiplicacion es : '. $mul. "<br>";
        echo 'La division es : '. $divi. "<br>";
        
    
    ?>