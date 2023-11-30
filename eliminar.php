<?php
        require "conexion.php";
        $usuario = $_POST['usuario'];
        $consulta = "DELETE FROM usuarios WHERE Usuario = '$usuario'";
        $resultado = $conexion->query($consulta);
        header("Location: listausuarios.php");
?>