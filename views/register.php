<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <h1 class="d-flex justify-content-center mt-3">Registrarse</h1>
    <div class="container mt-5 border border-dark rounded bg-secondary">
        
        <a class="btn btn-dark mt-2" href="../index.php">Ingreso</a>

        <form id="frmajax" class="col-7 center p-3 container" method="post">

            <div class="form-group">
                <label for="nickname">Nickname*</label>
                <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Nickname" require>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="info@dominio.com" require>
            </div>

            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="password" require>
            </div>

            <div class="d-flex justify-content-center">
                <button id="btnregistrar" type="submit" class="btn btn-dark">Registrar</button>
            </div>

        </form>
    </div>    

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btnregistrar').click(function(){
            var data=$('#frmajax').serialize();

            $.ajax({
                type:"post",
                url:"../controllers/insertUser.php",
                data: data,
                success: function(r){
                    var respuesta = r;
                    if(respuesta.inserto){
                        alert(respuesta.mensaje);
                        window.location.href = "../index.php";
                    }
                    else{
                        alert(respuesta.mensaje);
                    }
                }
            });
            return false;
        });
    });
</script>