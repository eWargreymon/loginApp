<?php

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
    <h2>Has iniciado sesión como: <?php echo $_SESSION['email']; ?></h2>
    <p>Cierra sesión <a href="logout.php">aquí</a></p>
</body>
</html>