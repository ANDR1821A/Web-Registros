<?php

include "../complementos/conexion.php";

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Trabajo de grado</title>
  <link rel="stylesheet" href="../css/style.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <script src='main.js'></script>

  <style>
    body {
      background-image: url(../img/font.png);
      background-size: cover;
    }
  </style>

</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col ">
        <nav class="navbar navbar-dark bg-dark fixed-top">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div style="text-align: center;">

              <a class="navbar-brand ">Administrador</a>
            </div>
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Administrador</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../Admin/InicioAdmi.html">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Admin/InicioAdmi.html">Usuarios</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Admin/DatosAdm.html">Mis datos</a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>


  <form method="post" action="Calificar_Trabajo.php">

    <div class="center_Calificación">
      <div class="card">
        <h3 class="card-header">Trabajos de grado registrados</h3>
        <div class="card-body">

          <div class="row mx-5">

            <table class="table table-bordered">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del trabajo de grado</th>
                <th scope="col">Modificar</th>
              </tr>

              <tbody class="table-group-divider">
                <?php

                $con = conexion();

                $sql = ("SELECT * FROM trabajogrado");
                $query = mysqli_query($con, $sql);
                $i = 0;

                while ($row = mysqli_fetch_array($query)) {
                  $i++;
                  $idTrabajoGrado = $row['idTrabajoGrado'];
                  $nombre = $row['nombre'];

                ?>
                  <tr>
                    <td> <?php echo $i; ?></td>
                    <td> <?php echo $nombre; ?></td>
                    <th><a href="trabajoG.php?id=<?php echo $row['idTrabajoGrado'] ?>" class="btn btn-success">Editar</a></th>
                  </tr>
                <?php

                }

                ?>
            </table>

          </div>



          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link">Anterior</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Siguiente</a>
              </li>
            </ul>
          </nav>

        </div>
      </div>
    </div>
  </form>


  <div class="final_pag">

    <p>2022 © Webtesis UDENAR | Pasto, Nariño - Colombia</p>

  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>