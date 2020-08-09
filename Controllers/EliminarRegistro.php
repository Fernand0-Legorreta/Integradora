<?php
include '../bd/conexion.php';

$Id_Registro = $_GET['Id_Registro'];

$sql = 'DELETE FROM registro WHERE Id_Registro=:Id_Registro';
$query = $pdo->prepare($sql);
$query->execute([
  'Id_Registro' =>$Id_Registro
]);
header("Location:../Sistema/Layout/Registros/ListadoRegistro.php");
?>
