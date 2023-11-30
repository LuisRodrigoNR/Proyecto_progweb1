
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
<body class=fondito>
<div class=alinear>    
<img src="https://www.animalesexoticos.org/wp-content/uploads/2019/12/foca-arpa-groenlandia.jpg" alt="" class=imagen>  
<div class=ventana>
            <form action="login.php" method="post">
            <h1>Focalandia</h1>
                
                <label for="Usuario"></label>
                    <br><br>
                <input name="nombre_usuario" type="text" placeholder="Ingresa Usuario" require class="tamaño">
                    <br>
                <label for="Contraseña"></label>
                    <br><br>
                <input name="password" type="password" placeholder="Ingresa Contraseña" require class="tamaño"> 
                    <br><br>
                <button type="submit" class=botones>Entrar</button> <br><br>  
                    <br>
           
            </form>
            <br>
    <a href="registro.php"><h3>Registrarse</h3></a>
    </div>
    </div>
   <?php
    session_start();
    if(isset($_SESSION['error'])){
      echo $_SESSION['error'];
      unset( $_SESSION['error']);

    }
    ?>
</body>
</html>
