<?php 
include '../../../bd/conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="DESARROLLO MFE"/>
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
            <a class="nav-item nav-link active" href="../../../index.html"><i class="fas fa-home">Home</i> <span class="sr-only">(current)</span></a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../Alquiler/Alquiler.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alquiler
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Alquiler/ListadoAlquiler.php"><i class="far fa-eye"> Ver Alquiler</i></a>
              <a class="dropdown-item" href="../Alquiler/Alquiler.html"><i class="fas fa-file"> Nuevo Alquiler</i></a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../Registros/Registro.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Registro
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Registros/ListadoRegistro.php"><i class="far fa-eye"> Ver Registro</i></a>
              <a class="dropdown-item" href="../Registros/Registro.html"><i class="fas fa-file"> Nuevo Registro</i></a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../Equipos/Equipos.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Equipos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Equipos/ListadoEquipo.php"><i class="far fa-eye"> Ver Equipos</i></a>
              <a class="dropdown-item" href="../Equipos/Equipos.html"><i class="fas fa-file"> Nuevo Equipos</i></a>
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
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
          <table class="table table-striped">
            <thead class="table table-hover table-dark">
              <tr>
                <th class="col">Id del Registro</th>
                <th class="col">Correo Electronico</th>
                <th class="col">Contresaña</th>
                <th class="col">Nombre</th>
                <th class="col">Apellido Paterno</th>
                <th class="col">Apellido Materno</th>
                <th class="col">Edad</th>
                <th class="col">Fecha de Registro</th>
                <th class="col">Sexo</th>
                <th class="col">Opciones</th>


              </tr>
              </thead>
              <tbody>
                  <?php
                    $queryResult = $pdo->query("SELECT * FROM registro");
                    while($registro = $queryResult->fetch()){ ?>
                    <tr scope="row">
                      <td><?php echo $registro['Id_Registro'] ?></td>
                      <td><?php echo $registro['Correo_Electronico'] ?></td>
                      <td><?php echo $registro['Contrasena'] ?></td>
                      <td><?php echo $registro['Nombre'] ?></td>
                      <td><?php echo $registro['Apellido_Paterno'] ?></td>
                      <td><?php echo $registro['Apellido_Materno'] ?></td>
                      <td><?php echo $registro['Edad'] ?></td>
                      <td><?php echo $registro['Registro'] ?></td>
                      <td><?php echo $registro['Sexo'] ?></td>

                    <td>
                      <?php echo '<a class="btn btn-primary" href="../../../Controllers/ModificarRegistro.php?Id_Registro=' . $registro['Id_Registro'] . '" role="button"><i class="fas fa-edit"></i></a>'?>              
                      <?php echo '<a class="btn btn-danger" href="../../../Controllers/EliminarRegistro.php?Id_Registro= ' . $registro['Id_Registro'] .  '" role="button"><i class="fas fa-trash-alt"></i></a>'?>
                      

                    </td>
                    </tr>
                    <?php } ;
                      ?>
            </tbody>
          </table>

      </div>
    </div>
  </div>