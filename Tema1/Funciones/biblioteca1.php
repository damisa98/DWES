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
    Require_once ('funciones.php');
    if(!isset($_POST['num'])) {
?>
    <form action=biblioteca1.php method="post">
        <label for="texto">Escribeme un numero</label>
        <input type="number" name="num" min="0" autofocus><br/>
        <input type="submit" value="Aceptar">
    </form>
<?php
    }else {
        if(is_numeric(($_POST['num'])){
            $num=(int)$_POST['num'];
            if(esPrimo($num)) {
                echo "El $num es primo.";
            }else {
                echo "El $num no es primo.";
            }
        }else{
            echo "el valor no es númerico";
        }
    }
?>



    </body>
</html>