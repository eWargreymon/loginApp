<?php require 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Registro</title>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md4">
                <div class="card bx">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 style="text-align: center;">¡Hola!</h3>
                            <h4 style="text-align: center;">Introduce los siguientes datos para registrarte y poder acceder</h4>
                        </div>
                        <form action="" method="POST">
                            <div class="form-group mt-3">
                                <input type="text" class="form-control input-sm" name="name" required placeholder="Nombre">
                            </div>
                            <div class="form-group mt-2">
                                <input type="email" class="form-control input-sm" name="email" required placeholder="Email de acceso">
                            </div>
                            <div class="form-group mt-2">
                                <input type="password" class="form-control input-sm" name="password" required placeholder="Contraseña">
                            </div>
                            <div class="form-group mt-2">
                                <input type="tel" class="form-control input-sm" name="phone" required placeholder="Teléfono">
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" class="btn btn-success btn-sm" name="registrar" value="Regístrate">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <?php

        if(isset($_POST['registrar'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $phone = $_POST['phone'];
        
            $sql = "INSERT INTO usuarios (nombre, correo, contraseña, telefono) VALUES ('$name','$email','$password','$phone')";
        
            if(mysqli_query($conn,$sql)){
                echo "<script>alert('Datos guardados correctamente');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } 


    ?>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>

</body>
</html>