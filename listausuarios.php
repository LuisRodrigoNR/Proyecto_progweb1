<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listausuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="titulo">
    <h1>Lista de Usuarios</h1>
    </div>
    
    <?php
    require 'conexion.php';

    $consulta="SELECT * FROM usuarios";
    $resultado=$conexion->query($consulta);
    $count = mysqli_num_rows($resultado); 
 
echo "<table border='2' >
    <tr>
        <th>Nombre</th>
        <th>Sexo</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Correo Electronico</th>
        <th>Borrar</th>
    </tr>";

    if ( $count>0 ){
        //aqui se pintarian los registro de la DB
        while( $row = mysqli_fetch_assoc($resultado)  ){
         echo "<tr>";
         echo"<td>". $row['Nombre'] ."</td>";
         echo"<td>". $row['Sexo'] ."</td>";
         echo"<td>". $row['Usuario'] ."</td>";
         echo"<td>". $row['Password'] ."</td>";
         echo"<td>". $row['Email'] ."</td>";
         echo"<td>";
        echo '<form action="eliminar.php" method="post">';
        echo '<input type="hidden" name="usuario" value="'.$row['Usuario'] . '">';
        echo '<button type="submit" class="eliminar">Eliminar</button>';
        echo '</form>';
        echo '</td>';
         echo "</tr>";
         
        }
        echo "</table>";
    
    }else{
        
        
        echo"<h1 style='color:red' >Sin Ningun registro</h1>";
        }
    
    
    ?>
    <a href="sesion.php"><button>Regresar</button></a>
    <div class=alinear>
    <img src="https://i.pinimg.com/originals/3f/9f/2e/3f9f2e731a2c9ef74a0209f9f6b92b31.gif" alt="">
    </div>
</body>
</html>