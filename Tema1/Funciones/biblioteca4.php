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
    Require_once ('funciones.php');
    $num = $_POST['num'];
    $letra = $_POST['letra'];
    if (!isset($num)) {
?>


    <form action='funciones.php' method='post'>
        <label for='texto'>Introuzca una cadena</label>
        <input type='text' name='num'><br>
        <label for="letra">Que quieres buscar</label>
        <input type="text" name="letra" id="letra">
        <input type='submit' value='Continuar'>
    </form>
<?php 
    }else {
        if ($resul=='false') {
            echo -1;
        }else{
            echo "El numero se encuentra en la posicion $resul";
        }
    }

?>



    </body>
</html>