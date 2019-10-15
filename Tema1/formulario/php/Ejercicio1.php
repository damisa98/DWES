<?php 
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $dir=$_POST['dir'];
        $edad=(int)$_POST['edad'];
        $tel=$_POST['movil'];
        $email=$_POST['email'];

        echo "<p style='color:red'>Nombre: $nombre</p>";
        echo "<p style='color:red'>Apelido: $apellido</p>";
        echo "<p style='color:red'>Dirreción: $dir</p>";
        echo "<p style='color:red'>Edad: $edad</p>";
        echo "<p style='color:red'>Numero de Telefono: $tel</p>";
        echo "<p style='color:red'>Correo Electronico: $email</p>";
    
    ?>