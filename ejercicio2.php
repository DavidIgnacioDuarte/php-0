<?php

    if($_POST) {
        
    // Impresión de nombre. Método POST permite recepcionar información:
    // Recibir información del formulario HTML:
    $nombre=$_POST['txtNombre'];

    echo "Hola ".$nombre; // IMPRESIÓN concatenada
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--Formulario que redirige a documento 'ejercicio2.php'-->
    <form action="ejercicio2.php" method="post">
        Nombre: 
        <input type="text" name="txtNombre" id=""> 
        <br/> <!--Salto de línea br-->
        <input type="submit" value="Enviar">
    </form>

</body>
</html>