<?php
require 'conexion.php';

$Usuario=$_POST["nombre_usuario"];
$Password=$_POST["password"];

$consulta="SELECT * FROM usuarios where Usuario='$Usuario' and Password='$Password'" ;
$resulado=$conexion->query($consulta);

session_start();
if($resulado->num_rows>0){
    $_SESSION["Nusuario"]=$Usuario;
    header("Location: sesion.php");

}
else{
    $_SESSION["error"]="Usuario o contrasena incorrectos";
    header("Location: index.php");
}


?>