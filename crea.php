<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require 'conexion.php';
$Nombre=$_POST["nombre"];
$Sexo=$_POST["sexo"];
$Usuario=$_POST["usuario"];
$Password=$_POST["password"];
$Email=$_POST["email"];


session_start();

$consulta="SELECT * FROM usuarios where Usuario='$Usuario' ";
$resultado=$conexion->query($consulta);
if($resultado->num_rows>0){
    $_SESSION["error"]="Este usuario ya existen perrin";
    header("Location: registro.php");
}
else{
    $consulta2="INSERT INTO usuarios(Nombre,Sexo,Usuario,Password,Email)values('$Nombre','$Sexo','$Usuario','$Password','$Email')";
    if($conexion->query($consulta2)===TRUE){
        echo"Usuario creado exitosamente";
    }
    else{
        echo"error".$conexion->error;
    }
}

?>
<div>
    <a href="registro.php"><button>Regresar</button></a>
</div>
</body>
</html>