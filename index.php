
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina para registro ">
    <meta name="keywords" content="HTML, Basico, Curso, UNAM">
    <meta name="author" content="Rodrigo Nieto">
    <link rel="stylesheet" href="estilos.css">
    <title>Login</title>
</head>
<body>
<div class=ventana>
            <form action="respuesta.php" method="post">
            
                <br>
                <label for="Usuario"></label>
                    <br><br>
                <input name="nombre_usuario" type="text" placeholder="Ingresa Usuario" require class="tamaño">
                    <br><br>
                <label for="Contraseña"></label>
                    <br><br>
                <input name="password" type="password" placeholder="Ingresa Contraseña" require class="tamaño"> 
                    <br><br>
                <button type="submit">Entrar</button> <br><br>  
                    <br>
           
            </form>
            <br><br>
    <a href="registro.php">Registrarse</a>
    </div>
   
</body>
</html>
