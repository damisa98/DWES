<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php 
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $n3=$_POST['n3'];

        $resul=round($n1+$n2+$n3)/3;

        if ($resul<5) {
            echo "insuficiente";
        }else if ($resul>=5 && $resul<=6.99) {
            echo "suficiente";
        }else if ($resul>=7 && $resul<=8.99) {
            echo "notable";
        }else{
            echo "sobresaliente";
        }
        

    ?>
</body>
</html>

