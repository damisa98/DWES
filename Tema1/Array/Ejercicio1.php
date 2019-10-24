<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php 
        for ($i=0; $i < 8 ; $i++) { 
            $array[$i]=rand(0, 10);
        }
        echo "El contenido de es:";
        foreach($array as $elemento){
            echo " $elemento ";
        }
        echo "<hr>";

        sort($array);

        echo "El array ordenado";

        foreach($array as $elemento){
            echo " $elemento ";
        } 

        echo "<hr>";

        unset($array[7]);

        echo "El array con el ultimo elemento borrado";

        foreach($array as $elemento){
            echo " $elemento ";
        } 

        echo "<hr>";

        echo "La longuitud del array es " . count($array);

        echo "<hr>";

        $arrayin=array_reverse($array);

        echo "El array ordenado de forma inversa ";

        foreach($arrayin as $elemento){
            echo " $elemento ";
        } 

    ?>
</body>
</html>