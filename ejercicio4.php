<?php

    // Declaración de variable a rellenar
    $txtNombre="";
    $rdgLenguaje="";

    $chkphp="";
    $chkjava="";
    $chkhaskell="";

    $lsJuego="";

    // Si hay un envío...
    if($_POST) {
        //if ternario -> pregunta si llego el dato de 'txtNombre, asignándolo
        // si se cumple. Sino, asigna un string vacío.
        $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
        $rdgLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

        $chkphp= (isset($_POST['chkphp']) == 'sí')?"checked":"";
        $chkjava= (isset($_POST['chkjava']) == 'sí')?"checked":"";
        $chkhaskell= (isset($_POST['chkhaskell']) == 'sí')?"checked":"";

        $lsJuego= (isset($_POST['lsJuego']))?$_POST['lsJuego']:"";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <?php if($_POST) { ?>
        <strong> Hola </strong>: <?php echo $txtNombre;?>
        <br/>
        <strong> Tu lenguaje favorito es: </strong> <?php echo $rdgLenguaje;?>
        <br/><br/>
        <strong>Estás aprendiendo: </strong>
    <?php } ?>

    <form action="ejercicio4.php" method="post">

        Nombre:<br/>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        <!-- campo VALUE me permite guardar lo que escribí, en el formulario -->
        <br/><br/>
        Lenguaje de Programación favorito:
        <br/> php: <input type="radio" 
            <?php echo ($rdgLenguaje=="php")?"checked":""; ?> name="lenguaje" value="php" id="">
        <br/> java: <input type="radio"
            <?php echo ($rdgLenguaje=="java")?"checked":""; ?> name="lenguaje" value="java" id="">
        <br/> haskell: <input type="radio"
            <?php echo ($rdgLenguaje=="haskell")?"checked":""; ?> name="lenguaje" value="haskell" id="">
        <!-- input tipo radio -> mismo name, puedo seleccionar SÓLO 1-->
        <br/><br/>

        Estás aprendiendo... 
        <br/> php: <input type="checkbox" 
            <?php echo $chkphp; ?> name="chkphp" value="sí" id="">
        <br/> java: <input type="checkbox" 
            <?php echo $chkjava; ?> name="chkjava" value="sí" id="">
        <br/> haskell: <input type="checkbox" 
            <?php echo $chkhaskell; ?> name="chkhaskell" value="sí" id="">
        <br/><br/>

        Juego favorito:<br/>
        <select name="lsJuego" id="">
            <option value="">[Ninguno]</option>
            <option value="bioshock" 
            <?php echo($lsJuego=="bioshock")?"selected":""; ?>> Bioshock </option>
            <option value="hk"
            <?php echo($lsJuego=="hk")?"selected":""; ?>> Hollow Knight </option>
            <option value="aoe"
            <?php echo($lsJuego=="aoe")?"selected":""; ?>> Age of Empires </option>
        </select><br/><br/>

        <input type="submit" value="Enviar">

    </form>

</body>
</html>