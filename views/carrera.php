<!-- DOCTYPE HTML -->
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
    <!-- insert carrera form -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Insertar Carrera</h1>
                    <hr />
                    <form action="../controller/carrera.php" method="POST">
                        <!-- RUT, NOMBRE, APELLIDO Y CARRERA-->
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre carrera" required />
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Guardar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- table fetch-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Carreras</h1>
                    <hr />
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../model/carrera.php';
                            $carreras = getCarreras();
                            while ($carrera = mysqli_fetch_array($carreras)) {
                                echo '<tr>';
                                echo '<td>' . $carrera['id_carrera'] . '</td>';
                                echo '<td>' . $carrera['nombre_carrera'] . '</td>';
                                echo '<td>';
                                echo '<a href="../controller/carrera.php?id=' . $carrera['id_carrera'] . '" class="btn btn-danger">Eliminar</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</body>