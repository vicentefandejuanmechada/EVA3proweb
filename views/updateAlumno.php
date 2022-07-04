<?php
include_once '../model/carrera.php';
if (!isset($_GET['id'])) {
    header('Location: ../controller/alumno.php');
} else {
    $id = $_GET['id'];
    $rut = $_GET['rut'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $carrera_id = $_GET['carrera'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumno</title>
    <!-- importar boostrar -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
</head>

<body>
    <!-- form -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Update Alumno</h1>
                    <hr />
                    <form action="../controller/alumno.php" method="POST">
                        <input type="hidden" name="op" value="update" />
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <!-- RUT, NOMBRE, APELLIDO Y CARRERA-->
                        <div class="form-group">
                            <label for="rut">Rut</label>
                            <input type="text" class="form-control" id="rut" name="rut" value="<?php echo $rut; ?>" placeholder="Ingrese rut" required />
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" placeholder="Ingrese nombre" required />
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido; ?>" placeholder="Ingrese apellido" required />
                        </div>
                        <div class="form-group">
                            <label for="carrera">Carrera</label>
                            <select class="form-control" id="carrera" name="carrera">
                                <?php
                                $carreras = getCarreras();
                                while ($carrera = mysqli_fetch_array($carreras)) {
                                    if ($carrera['id_carrera'] == $carrera_id) {
                                        echo '<option value="' . $carrera['id_carrera'] . '" selected>' . $carrera['nombre_carrera'] . '</option>';
                                    } else {
                                        echo '<option value="' . $carrera['id_carrera'] . '">' . $carrera['nombre_carrera'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
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