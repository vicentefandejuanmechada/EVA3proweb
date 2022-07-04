<?php

$id = $_GET['id'];
$nombre = $_GET['nombre'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrera</title>
    <!-- importar boostrar -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
</head>

<body>
    <!-- form -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Update Carrera</h1>
                    <hr />
                    <form action="../controller/carrera.php" method="POST">
                        <input type="hidden" name="op" value="update" />
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <!-- RUT, NOMBRE, APELLIDO Y CARRERA-->
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" placeholder="Ingrese nombre carrera" required />
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Guardar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>