<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2</title>
</head>
<body>
<?php 

    if (isset($_POST['numeroIntroducido'])&& isset($_POST['media']) && isset($_POST['cont'])){
        $numeroIntroducido = (int)$_POST['numeroIntroducido'];
        $media = (int)$_POST['media'];
        $cont = (int)$_POST['cont'];
    
        if ($numeroIntroducido < 0) {
            $media=$media/$cont;
            echo "La media de todos los numeros introduciodos son $media";
            var_dump($media);
            var_dump($cont);
            
        }else{
            $media+=$numeroIntroducido;
            $cont++;
            require_once ('Ejercicio2index.php');
        }
    
    
    
    }else{
        $media=0;
        $cont=0;
        require_once ('Ejercicio2index.php');
    }
    

   
   
    

?>

    </body>
</html>