<?php 
include '../../../bd/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Emanuel Vallejo Gil"/>
    <meta name="description" content="Este sitio web ed de aoquilar equipos de computo"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <style>
      #copy{
        initial-letter-align: top;
      }
      #copi{
        initial-letter-align: top;
      }
      
    </style>
    <title>Desarrollo MFE</title>
   <script src="https://kit.fontawesome.com/5754c2c284.js" crossorigin="anonymous"></script>
</head> 
<body background="../../Assets/FOND.jpg">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="../../Assets/Logo.jpg" width="30" height="30" alt="" loading="lazy">
      <a class="navbar-brand" href="#">FAST ALQUILER</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-item nav-link active" href="../../../index.html"><i class="fas fa-home">Inicio</i> <span class="sr-only">(current)</span></a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../Sistema/Layout/Alquiler/Alquiler.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alquiler
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Sistema/Layout/Alquiler/ListadoEquipo.php"><i class="far fa-eye"> Ver Alquiler</i></a>
              <a class="dropdown-item" href="../Sistema/Layout/Alquiler/Alquiler.html"><i class="fas fa-file"> Nuevo Alquiler</i></a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../Sistema/Layout/Registros/Registro.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Registro
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Sistema/Layout/Registros/ListadoRegistro.php"><i class="far fa-eye"> Ver Registro</i></a>
              <a class="dropdown-item" href="../Sistema/Layout/Registros/Registro.html"><i class="fas fa-file"> Nuevo Registro</i></a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../Sistema/Layout/Equipos/Equipos.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Equipos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Sistema/Layout/Equipos/ListadoEquipo.php"><i class="far fa-eye"> Ver Equipos</i></a>
              <a class="dropdown-item" href="../Sistema/Layout/Equipos/Equipos.html"><i class="fas fa-file"> Nuevo Equipos</i></a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              MAS OPCIONES
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Ayuda</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Reportar problema</a>
            </div>
          </li>
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
  </nav>
  <div class="container">
    <div class="row col-md-12 col-lg-12 col-xs-12">
      <center><h3 class="text-left">
        Lista De Equipos
      </h3></center>
      <!--Tabla De Alumnos-->
      <div class="container-fluid table-responsive">
          <table class="table table-hover table-dark">
            <thead class="thead-dark">
              <tr>
          
                <th class="col">Numero del Equipo</th>
                <th class="col">Nombre del Equipo</th>
                <th class="col">Precion por el Equipo</th>
                <th class="col">Opciones</th>


              </tr>
              </thead>
              <tbody>
                      <?php 
                        $queryResult = $pdo->query("SELECT * FROM equipo");
                            while($equipo = $queryResult->fetch()){ ?>
                    <tr scope="row">    
                  <td><?php echo $equipo['Numero_equipo'] ?></td>
                  <td><?php echo $equipo["Nombre_Equipo"] ?></td>
                  <td><?php echo $equipo["Precio_Equipo"] ?></td>

                  <td>
                    <!--<button type="button" class="btn btn-primary"><i class="fas fa-eye"></i></button>-->
                    <?php echo '<a class="btn btn-primary" href="../../../Controllers/ModificarEquipo.php?Numero_equipo=' . $equipo['Numero_equipo'] . '" role="button"><i class="fas fa-edit"></i></a>'?>
                    <?php echo '<a class="btn btn-danger" href="../../../Controllers/EliminarEquipo.php?Numero_equipo=' . $equipo['Numero_equipo'] . '" role="button"><i class="fas fa-trash-alt"></i></a>'?>
                  </td>
                </tr>
                <?php } ;?>

            </tbody>
          </table>

      </div>
    </div>
  </div>