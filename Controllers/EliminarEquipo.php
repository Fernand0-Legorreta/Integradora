<?php
  include '../bd/conexion.php';
  
  $Numero_equipo = $_GET['Numero_equipo'];
  
  $sql = 'DELETE FROM equipo  WHERE Numero_equipo=:Numero_equipo';
  $query = $pdo->prepare($sql);
  $query->execute([
       'Numero_equipo' =>$Numero_equipo
     ]);
                  
   header("Location:../Sistema/Layout/Equipos/ListadoEquipo.php");
?>