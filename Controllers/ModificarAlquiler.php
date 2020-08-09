<?php 
include '../bd/conexion.php'; 
$result = false;
if(!empty ($_POST)){
    $Id_Alquiler= $_POST['Id_Alquiler'];
    $newCorreo = $_POST['Correo'];
    $newContrasena = $_POST['Contrasena'];
    $newLocalidad = $_POST['Localidad'];
   
    $sql = "UPDATE alquiler SET Correo = :Correo, Contrasena = :Contrasena, Localidad = :Localidad WHERE Id_Alquiler = :Id_Alquiler";
    $query = $pdo->prepare($sql);
    
    
    $result = $query->execute([
      'Id_Alquiler' => $Id_Alquiler,
      'Correo' => $newCorreo,
      'Contrasena' => $newContrasena,
      'Localidad' => $newLocalidad
    ]);
   
    $CorreoValue = $newCorreo;
    $ContrasenaValue = $newContrasena;
    $LocalidadValue = $newLocalidad;
  }else{
    $Id_Alquiler = $_GET['Id_Alquiler'];
     $sql = "SELECT * FROM alquiler WHERE Id_Alquiler = :Id_Alquiler";
     $query = $pdo->prepare($sql);
   
     $query->execute([
       'Id_Alquiler' => $Id_Alquiler
     ]);
   
     $row = $query->fetch(PDO::FETCH_ASSOC);
     $idValue = $row['Id_Alquiler'];
     $CorreoValue = $row['Correo'];
     $ContrasenaValue = $row['Contrasena'];
     $NameValue = $row['Nombre'];
     $Apellido_PValue = $row['Apellido_Paterno'];
     $Apellifo_MValue = $row['Apellido_Materno'];
     $LocalidadValue = $row['Localidad'];
     $FechaValue = $row['Fecha_Registro'];
  
  } 
  if($result == true) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"> 
              <strong>El alquiler!</strong>Se Actualizo Correctamente
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
             </button>
          </div>';
    echo '<a href="../Sistema/Layout/Alquiler/ListadoAlquiler.php">Regresar</a>';
  }
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
<body background="../Sistema/Assets/FOND.jpg">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="../Sistema/Assets/Logo.jpg" width="30" height="30" alt="" loading="lazy">
      <a class="navbar-brand" href="#">FAST ALQUILER</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-item nav-link active" href="../index.html"><i class="fas fa-home">Home</i> <span class="sr-only">(current)</span></a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../Sistema/Layout/Alquiler/Alquiler.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alquiler
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Sistema/Layout/Alquiler/ListadoAlquiler.php"><i class="far fa-eye"> Ver Alquiler</i></a>
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
    
    
    </div>
    <div class="row col-md-12 col-lg-12 col-xs-12">
      <h3 class="text-left">
        Modifiación De Alquiler
      </h3>
      <br>
      
      <br>
      <div class="container">
    <h3 class="text-center">Modificación del Registro</h3>
    <br>
    <form action= "ModificarAlquiler.php" method="POST">
         <input class="form-control" type="hidden" name="Id_Alquiler" value="<?php echo $idValue?>">
         <div class="row">
          <div class="col-md-3"> 
              <p>Correo Electronico:
                  <input type="text" size="30" class="form-control" name="Correo" value="<?php echo $CorreoValue; ?>" >
              </p>
          </div>
              <div class="col-md-3">
                  <p>Contraseña: 
                      <input type="text" size="30" class="form-control" name="Contrasena" value="<?php echo $ContrasenaValue; ?>">
                  </p>
              </div>
      
              <div class="Localidad">
                  <p>Localidad: 
                      <input type="text" size="30" class="form-control"  name="Localidad" value="<?php echo $LocalidadValue; ?>"  >
                  </p>
              </div>
              <div class="col-md-3">
              <button class="btn btn-primary" type="submit">Actulizar</button>
            </div>
          </div>  







         </form>
 
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
   
  <div class="copy">
  <!-- Footer -->
<footer class="page-footer bg-secondary font-small blue pt-4">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase">FAST ALQUILER</h5>
      <p>Aquilar siempre es una opcion</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Contactos</h5>

      <ul class="list-unstyled">
        <li>
          <a p style=color:white href="#!">al22184563@gmail.com</a>
        </li>
        <li>
          <a p style=color:white href="#!">al22194567@gmail.com</a>
        </li>
        <li>
          <a p style=color:white href="#!">al22191674@gmail.com</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Soporte</h5>

      <ul class="list-unstyled">
        <li>
          <a p style=color:white href="#!">Reportar fallos</a>
        </li>
        <li>
          <a p style=color:white href="#!">Acerca de</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div p style=color:white class="footer-copyright text-center py-3">copyright, 2020-2020 © Fernado Estaban Legorreta Felix -- Litzy Magaly Alvarez Linares -- Emanuel Vallego Gil --
</div>
<!-- Copyright -->

</footer>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>