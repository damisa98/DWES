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
    Require_once ('funciones.php');
    $num = $_POST['num'];
    if (!isset($num)) {
?>


    <form action='funciones.php' method='post'>
        <label for='texto'>Introuzca un numero</label>
        <input type='text' name='num'>
        <input type='submit' value='Continuar'>
    </form>
<?php 
    }else {
        echo "El numero $num tiene $cont";
    }

?>



    </body>
</html>