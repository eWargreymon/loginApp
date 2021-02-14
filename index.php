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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="dash.html">¡Hola, <?php 
                $email = $_SESSION['email'];
        
                $sql = "SELECT * FROM usuarios WHERE correo='$email'";
                $result = mysqli_query($conn,$sql);
        
                $usuario=mysqli_fetch_assoc($result);
                echo $usuario['nombre'];
            ?>!</a>

            <a href="logout.php" class="btn btn-outline-warning btn-nav">Cerrar sesión</a>
        </div>
    </nav>
    <!--Fin de Nav-->

    <!--Banner bienvenida-->
    <header class="main-banner">
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-lg-8 col-md-8">
                    <div class="main-banner-content">    
                        <h1>INICIO DE SESIÓN CORRECTO</h1>
                        <a href="#" data-toggle="modal" data-target="#infoUsuario" class="btn btn-info mt-3">Detalles del usuario</a>
                        <a href="#" data-toggle="modal" data-target="#agregarDatos" class="btn btn-success mt-3 ml-2">Agrega tus detalles a la tabla inferior</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Fin del banner bienvenida-->

    <!--Tabla de presentación de contenidos-->

    <div class="container-fluid">
        <div class="row mt-2">
            <div class="justify-content-center">
                <table class="table table-striped table-hover bg-light">
                    <tr class="table-dark">
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Grupo</th>
                        <th>Película</th>
                        <th>Serie</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!--Fin de Tabla de presentación de contenidos-->

    <!--Modal para mostrar información del usuario logeado-->
    <div class="modal fade" id="infoUsuario" tabindex="-1" aria-labelledby="Información del usuario logeado" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Información del usuario logeado</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <table class="table table-border">
                    <tr>
                        <th>ID</th>
                        <td><?php echo $usuario['id']; ?></td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td><?php echo $usuario['nombre']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $usuario['correo']; ?></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><?php echo $usuario['telefono']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!--Fin del Modal para mostrar información del usuario logeado-->

    
    <!--Modal para agregar información a la tabla de datos-->
    <div class="modal fade" id="agregarDatos" tabindex="-1" aria-labelledby="Formulario agregar datos" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Introduce la siguiente información</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <input type="text" value="John" required class="form-control form-control-sm">
                        </div>
                        <div class="mb-3">
                            <input type="email" value="e@em.com" required class="form-control form-control-sm">
                        </div>
                        <div class="mb-3">
                            <input type="tel" value="45585" required class="form-control form-control-sm">
                        </div>
                        <div class="mb-3">
                            <select class="form-control form-control-sm">
                                <option value="Graphic designer">Graphic designer</option>
                                <option value="Web designer">Wev designer</option>
                                <option value="Web developer">Web developer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-block btn-success">Save employee info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>

</body>
</html>