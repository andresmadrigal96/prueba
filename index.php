<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <h1 class="mt-3 d-flex justify-content-center">Ingreso</h1>
    <div class="container border border-dark rounded mt-5 bg-secondary">
        <a href="views/register.php" class="btn btn-dark mt-2">Registrarse</a>
        <form action="controllers/login.php" method="post">

            <div class="form-group mt-3">
                <?php if (!empty($_GET["error"])): ?>
                    <div class="alert alert-danger"><?php echo $_GET["error"] ?></div>
                <?php endif ?>
                <label class="justify-content-center d-flex" for="nickname">Nickname</label>
                <input type="text" class="form-control" id="nickname" name="nickname" placeholder="nickname">
            </div>

            <div class="form-group">
                <label class="justify-content-center d-flex" for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Mantener</label>
            </div>

            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-dark">Ingresar</button>
            </div>   

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>
</html>