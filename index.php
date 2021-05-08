<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="enviar.php" method="POST">
        <h2>Contacto real</h2>
        <input type="text" name="nombre" placeholder="Escribe tu nombre" required>
        <input type="text" name="correo" placeholder="Escribe tu correo" required>
        <input type="text" name="asunto" placeholder="Escribe el asunto" required>
        <textarea name="mensaje" placeholder="Cuéntanos tu petición"></textarea>
        <input type="submit" value="Enviar mensaje" name="enviar" >
    </form>
    <?php
    include("correo.php");
   ?>   
</body>
</html>