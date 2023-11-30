<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesioniniciada</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body class=fonditodesesion>
    <div>
        <h1 class=titulo>"Sesion iniciada"</h1>
        <?php
        session_start();
        echo"<div class=titulo2>";
        echo $_SESSION['Nusuario'];
        echo "</div>";
        ?>
    </div>
    <br><br>
    <div class=alinear>
    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/096e524e-ac44-4208-9412-7d5eeb3a83f9/d5e99vk-5291760b-dbbd-43dd-8548-4e8c07c284ee.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzA5NmU1MjRlLWFjNDQtNDIwOC05NDEyLTdkNWVlYjNhODNmOVwvZDVlOTl2ay01MjkxNzYwYi1kYmJkLTQzZGQtODU0OC00ZThjMDdjMjg0ZWUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.OX9FVWHfpKkV_2JJK6Y2Ti4kXGvSfrTn4pH7muat3Hs" alt="">    
    <a href="listausuarios.php"><h3>Ver Lista de Usuarios</h3></a>
    </div>
        
</body>
</html>