<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
    if (!isset($_GET['n'])) {
        $contadorNumeros = 0;
        $numeroTexto = "";
        $n="";
    }else{
        $contadorNumeros = $_GET['contadorNumeros'];
        $numeroTexto = $_GET['numeroTexto'];
        $n=$_GET['n'];
    }
// Muestra los números introducidos
    if ($contadorNumeros == 6) {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        $numeroTexto = substr($numeroTexto, 2); // quita los dos primeros
// espacios de la cadena
        $numero = explode(" ", $numeroTexto);
        echo "Los números introducidos son: ";
        foreach ($numero as $num) {
            echo $num, " ";
        }
    }
// Pide número y añade el actual a la cadena
    if (($contadorNumeros < 6) || (!isset($_GET['n']))) {
?>
        <form action="#" method="GET">
        Introduzca un número:
        <input type="number" name ="n" autofocus>
        <input type="hidden" name="contadorNumeros" value="<?=++$contadorNumeros ?>">
        <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n?>">
        <input type="submit" value="OK">
        </form>
<?php
    }
?>