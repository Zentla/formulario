<?php
        $destino = 'fernandohernandezortela@gmail.com';
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];

        $header = "Enviado desde un lugar";
        $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;
        mail($destino, $asunto, $mensajeCompleto, $header);

        echo "<script>alert('Exitoso')</script>";
        echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";
?>


