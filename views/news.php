<?php
    require '../controllers/conexion.php';
    require '../utils/security.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="stylesheet" href="../models/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-secondary justify-content-between">
        <a class="navbar-brand">Bienvenido</a>
        <form class="form-inline">
            <ul class="form-inline my-2 my-lg-0">
                <li class="text-light mr-2 wd"> <?php echo $_SESSION["usuario_logueado"] ?></li>
                <li class="nav-item active bg-dark wd"><a class="btn btn-outline-light my-2 my-sm-0 lyrlo" href="../controllers/logout.php">Cerrar sesión</a></li>
            </ul>
        </form>
    </nav>

    <div class="container mt-5">
        <form>
            <div class="form-group">
                <label class="justify-content-center d-flex" for="nickname">Título</label>
                <input type="text" class="form-control" placeholder="titulo">
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Contenido</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>
</html>
