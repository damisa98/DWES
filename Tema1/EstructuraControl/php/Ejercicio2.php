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
        $hora=$_POST['hora'];
        $salario=0;

        for ($i=0; $i < $hora; $i++) { 
            if($i >= 40){
                $salario+=16;
            }else{
                $salario+=12;
            }
        }

        echo "Tu salario es $salario";
        

    ?>
</body>
</html>

