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
        $n1=$_POST['n1'];
        $ultima=$n1%10;
        $primera=0;
        $num=strlen($n1);

        for ($i=0; $i < strlen($n1) ; $i++) { 
            $primera=$n1%10;
            $n1=(int)$n1/10;
        }
        if ($num==4) {
            $primera=round($n1);   
        }
         
        
        if ($primera%2==0) {
            echo "El numero $primera es par";
        }else{
            echo "El numero $primera es impar";
        }  
        echo "<br>";
        if ($ultima%2==0) {
            echo "El numero $ultima es par";
        }else{
            echo "El numero $ultima es impar";
        }
        

    ?>
</body>
</html>