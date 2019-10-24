<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
</head>
<body>

<?php
        if (!isset($_POST['num'])) {
            echo "<h1>Escribe el numero para el array</h1>";
            $numintro=0;
            $array=[];
            require_once('Ejercicio5index.php');
        }else {
            $num=(int)$_POST['num'];
            $numintro=(int)$_POST['numintro'];
            $array=$_POST['array'];
            $array[$numintro]=$num;
            
            

            if ($numintro==10) {
                sort($array);/*No me lo ordena por eso no sale*/
                echo "El numero mas pequeño del array es ". $array[0]." y el mas alto es $array[$numintro]";
            }else {
                $numintro++;
                echo "Introduzca otro numero";
                echo "<br>";
                require_once('Ejercicio5index.php');
            }
            
            
        }
?>


</body>
</html>