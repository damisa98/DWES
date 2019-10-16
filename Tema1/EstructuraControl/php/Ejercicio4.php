<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php 
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $n3=$_POST['n3'];

        $mayor=$n1;
        $menor=$n2;
        $medio=$n3;

        if ($mayor<$menor) {
            $mayor=$menor;
            $menor=$n1;
        }elseif ($mayor<$medio) {
            $mayor=$medio;
            $medio=$n1;
        }elseif ($medio<$menor) {
            $medio=$menor;
            $menor=$n3;
        }
        
        echo "El numero mayor es $mayor el que esta en medio es $medio y el menor es $menor";
    ?>
</body>
</html>