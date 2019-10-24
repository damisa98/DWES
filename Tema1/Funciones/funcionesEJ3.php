<?php
    function binDeci($num) {
        $cont= strlen($num);
        $suma=1;
        $resul=0;

        for ($i=0; $i < $cont; $i++) { 
            if (substr($num,$i,1)==1) {
                $resul+=$suma;
            }
            $suma*=2;
        }

        return $resul;

    }

?>