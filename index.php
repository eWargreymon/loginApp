<?php

require 'connect.php';

session_start();

if(!$_SESSION['email']){
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>INICIO DE SESIÓN CORRECTO</h1>
    <h2>Has iniciado sesión como:
    <?php 
        $email = $_SESSION['email'];
        
        $sql = "SELECT * FROM usuarios WHERE correo='$email'";
        $result = mysqli_query($conn,$sql);
        
        $usuario=mysqli_fetch_assoc($result);
        echo $usuario['nombre'];
    ?>
    </h2>
    <h3>Tu dirección de correo electrónico es: <?php echo $usuario['correo']; ?></h3>   
    <h3>Tu número de teléfono es: <?php echo $usuario['telefono']; ?></h3>    
    <p>Cierre sesión <a href="logout.php">aquí</a></p>
</body>
</html>