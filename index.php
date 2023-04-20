<?php 
    if(isset($_POST['usuario'])){
        echo $_POST['usuario'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
    <script src="JS/jquery-3.6.4.min.js" type="text/javascript"></script>
    <script src="JS/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>

    <h1 class="text-center"> Bienvenido </h1>
    <div class="row">
        <div class="mx-auto col-10 col-md-8 col-lg-6">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="usuario">Usuario</label> 
                    <input class="form-control" type="text" name="usuario" id="usuario">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input class="form-control" type="password" name="password" id="password">   
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </div>

</body>
</html>