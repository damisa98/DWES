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
    Require_once ('funcionesEJ3.php');
    if(!isset($_POST['num'])) {
?>
    <form action=Ejercicio3.php method="post">
        <label for="texto">Escribeme un numero en binario</label>
        <input type="number" name="num" min="0" autofocus><br/>
        <input type="submit" value="Aceptar">
    </form>
<?php
    }else {
        if(is_numeric(($_POST['num'])){
            $num=(int)$_POST['num'];
            
            echo "El numero en decimal es $resul";

        }else{
            echo "el valor no es númerico";
        }
    }
?>



    </body>
</html>