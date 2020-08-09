<?php
require_once '../bd/conexion.php';
$result = false;
if(!empty ($_POST)){
$Id_Alquiler = $_POST['Id_Alquiler'];
$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];
$Nombre = $_POST['Nombre'];
$Apellido_Paterno = $_POST['Apellido_Paterno'];
$Apellido_Materno = $_POST['Apellido_Materno'];
$Localidad= $_POST['Localidad'];
$Fecha_Registro= $_POST['Fecha_Registro'];

    $mysql_query = "INSERT INTO alquiler(Id_Alquiler,Correo,Contrasena,Nombre,Apellido_Paterno,Apellido_Materno,Localidad,Fecha_Registro)
                    VALUES(:Id_Alquiler, :Correo,:Contrasena, :Nombre,:Apellido_Paterno,:Apellido_Materno,:Localidad,:Fecha_Registro)";
    $query = $pdo->prepare($mysql_query);

    $result = $query->execute([
      'Id_Alquiler' => $Id_Alquiler,
      'Correo' => $Correo,
      'Contrasena' => $Contrasena,
      'Nombre' => $Nombre,
      'Apellido_Paterno' => $Apellido_Paterno,
      'Apellido_Materno' => $Apellido_Materno,
      'Localidad' => $Localidad,
      'Fecha_Registro' => $Fecha_Registro
    ]);

      if($result == true){
        header("Location:../Sistema/Layout/Alquiler/ListadoALquiler.php");
      }
}

?>