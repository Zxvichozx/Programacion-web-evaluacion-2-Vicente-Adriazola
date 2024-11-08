<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    

    <div class="container">
        <div class="row">
            <h2>Registrar persona</h2>
            <div class="col-12">
                <form action="proc.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nombre_completo" class="form-label">Nombre completo</label>
                        <input type="text" class="form-control" id="nombre_completo" name="nombre_completo">
                    </div>
                    <div class="mb-3">
                        <label for="RUT" class="form-label" >RUT</label>
                        <input type="text" class="form-control" id="RUT" name="RUT">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="Telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="file" name="imagen" id="imagen">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>


    
</body>
</html>