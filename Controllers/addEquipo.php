<?php
require_once '../bd/conexion.php';
$result = false;
if(!empty ($_POST)){
  $Numero_equipo = $_POST['Numero_equipo'];
  $Nombre_Equipo = $_POST['Nombre_Equipo'];
  $Precio_Equipo = $_POST['Precio_Equipo'];
  
  
      $mysql_query = "INSERT INTO equipo(Numero_equipo,Nombre_Equipo,Precio_Equipo)
                      VALUES(:Numero_equipo,:Nombre_Equipo,:Precio_Equipo)";
      $query = $pdo->prepare($mysql_query);
  
      $result = $query->execute([
        'Numero_equipo' => $Numero_equipo,
        'Nombre_Equipo' => $Nombre_Equipo,
        'Precio_Equipo' => $Precio_Equipo
      ]);
      if($result == true){
        header("Location:../Sistema/Layout/Equipos/ListadoEquipo.php");
      }
      
}
?>
