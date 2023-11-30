<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

</head>
<body>
    <div>
      <form action="" method="POST">
        <label for="Nombre">Nombre</label><br><br>
        <input name="nombre" type="text" placeholder="Nombre" require class="tamaño">
        <br><br>
        <label for="sexo">sexo</label>
        <select>
      <option value="" disabled selected>Elige</option>
      <option value="1">Masculino</option>
      <option value="2">Femenino</option>
    </select>
    <br><br>
    <label>Usuario</label><br><br>
        <input name="usuario" type="text" placeholder="Nombre_de_usuario" require class="tamaño">
        <br><br>
        <label>Contraseña</label><br><br>
        <input name="password" type="text" placeholder="password" require class="tamaño">
      </form>
    </div>
</body>
</html>