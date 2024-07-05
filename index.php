<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #999;">
    <div class="container">
        <div class="mb-3">
            <center>
                <img src="img/imagen11.jpg" alt="1" height="500px">
            </center>
        </div>
        <div class="mb-3">
            <h1 class="text-center">Con este formulario vamos a enviar los datos por email</h1>
            <br>
            <form action="datos.php" method="post" enctype="multipart/form-data"  >
                <div class="mb-3 row">
                    <label for="direccion" class="col-sm-2 col-form-label">Destinatario:</label>
                    <div class="col-sm-10">
                        <input type="email" name="destino" class="form-control" required placeholder="Escribe el correo">
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="asunto" class="col-sm-2 col-form-label">Asunto:</label>
                    <div class="col-sm-10">
                        <input type="text" name="asunto" class="form-control" required placeholder="Escribe el asunto">
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="mensaje" class="col-sm-2 col-form-label">Mensaje:</label>
                    <div class="col-sm-10">
                        <textarea name="mensaje" class="form-control" required placeholder="Escribe el mensaje"></textarea>
                    </div>
                </div>
                <br>
                <br>
                <center>
                    <input type="submit" class="btn btn-dark" value="Enviar">
                </center>
            </form>
        </div>
    </div>
    <footer>
        <hr>
        <center>
            <p>
                &COPY;<?php echo date('Y') ?>
            </p>
        </center>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>