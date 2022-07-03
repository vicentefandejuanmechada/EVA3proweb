<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alumno</title>
  <!-- importar boostrar -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
</head>

<body>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Alumno</h1>
          <hr />
          <form action="../controller/alumno.php" method="POST">
            <!-- RUT, NOMBRE, APELLIDO Y CARRERA-->
            <div class="form-group">
              <label for="rut">RUT</label>
              <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese su RUT" required />
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" required />
            </div>
            <div class="form-group">
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" required />
            </div>
            <div class="form-group">
              <label for="carrera">Carrera</label>
              <select name="carrera" id="carrera" class="form-select" required>
                <option selected>Seleccione una carrera</option>
                <?php
                include '../model/carrera.php';
                $carreras = getCarreras();
                while ($carrera = mysqli_fetch_array($carreras)) {
                  echo '<option value="' . $carrera['id_carrera'] . '">' . $carrera['nombre_carrera'] . '</option>';
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
  <section>
    <div class="container">
      <!-- table fetch-->
      <div class="row">
        <div class="col-md-12">
          <h1>Alumnos</h1>
          <hr />
          <table class="table table-striped">
            <thead>
              <tr>
                <th>RUT</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Carrera</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../model/alumno.php';
              $alumnos = getAlumnos();
              while ($alumno = mysqli_fetch_array($alumnos)) {
                echo '<tr>';
                echo '<td>' . $alumno['rut_alumno'] . '</td>';
                echo '<td>' . $alumno['nombre_alumno'] . '</td>';
                echo '<td>' . $alumno['apellido_alumno'] . '</td>';
                echo '<td>' . $alumno['nombre_carrera'] . '</td>';
                echo '<td>';
                echo '<a href="/controller/alumno.php?id=' . $alumno['id_alumno'] . '" class="btn btn-primary">Editar</a>';
                echo '<a href="/controller/alumno.php?id=' . $alumno['id_alumno'] . '&accion=eliminar" class="btn btn-danger">Eliminar</a>';
                echo '</td>';
                echo '</tr>';
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
  </section>
</body>

</html>