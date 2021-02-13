<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'app1';

    $conn = mysqli_connect($server, $user, $pass, $database);

    if( !$conn ){
        die("Imposible conectar con la base de datos");
    }
?>