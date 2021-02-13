<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Login</title>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md4">
                <div class="card bx">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>Bienvenido/a</h4>
                            <p class="card-text small text-muted">Introduce tus credenciales para iniciar sesión</p>
                        </div>
                        <form action="" method="POST">
                            <div class="form-group mt-2">
                                <input type="email" class="form-control input-sm" name="email" required placeholder="Email de acceso">
                            </div>
                            <div class="form-group mt-2">
                                <input type="password" class="form-control input-sm" name="password" required placeholder="Contraseña">
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" class="btn btn-success btn-sm" name="entrar" value="Entrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>

</body>
</html>