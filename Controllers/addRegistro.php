<?php
require_once '../bd/conexion.php';
$result = false;
if(!empty ($_POST)){
    $Id_Registro = $_POST['Id_Registro'];
    $Correo_Electronico = $_POST['Correo_Electronico'];
    $Contrasena = $_POST['Contrasena'];
    $Nombre = $_POST['Nombre'];
    $Apellido_Paterno = $_POST['Apellido_Paterno'];
    $Apellido_Materno = $_POST['Apellido_Materno'];
    $Edad = $_POST['Edad'];
    $Registro = $_POST['Registro'];
    $Sexo = $_POST['Sexo'];

    $mysql_query = "INSERT INTO registro(Id_Registro,Correo_Electronico,Contrasena,Nombre,Apellido_Paterno,Apellido_Materno,Edad,Registro,Sexo)
                    VALUES (:Id_Registro,:Correo_Electronico,:Contrasena,:Nombre,:Apellido_Paterno,:Apellido_Materno,:Edad,:Registro,:Sexo)";
    $query = $pdo->prepare($mysql_query);

    $result = $query->execute([
        'Id_Registro' => $Id_Registro,
        'Correo_Electronico' => $Correo_Electronico,
        'Contrasena' => $Contrasena,
        'Nombre' => $Nombre,
        'Apellido_Paterno' => $Apellido_Paterno,
        'Apellido_Materno' => $Apellido_Materno,
        'Edad' => $Edad,
        'Registro' => $Registro,
        'Sexo' => $Sexo
    ]);
    if($result == true){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                <strong>El Registro!</strong> Fue insertado correctamente
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
            </div>';
        header("Location:../Sistema/Layout/Registros/ListadoRegistro.php");
    }



}
?>
