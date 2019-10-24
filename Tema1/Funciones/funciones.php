<?php
    function esPrimo($num) {
        $esPrimo = true;
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $esPrimo = false;
            }
        }
        // El 0 y el 1 no se consideran primos
        if (($num == 0) || ($num == 1)) {
            $esPrimo = false;
        }
            return $esPrimo;
    }

    function digito($num){
        $cont=strlen($num);

        return $cont;

    }

    function darVuelta($num){

        $num=strrev($num);

        return $num;
    }

    function posicion($num,$letra){
        $resul = strpos($num,$letra);

        return $resul;
    }


?>