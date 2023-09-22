<?php
    $lang="es";
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "\\nhOLA mUNDO<br>\n";
    echo "Adios<br>";
    echo '\nHola Mundo 2';
    echo "<hr>";
    $numero = 45;
    echo "La variable <b>\$numero</b>=$numero" . "hola otra vez " . $numero; //Hola
    echo "<br>";
    echo 'La variable $numero=' . $numero . " gracias";
    echo "<br>";

    $nombre="34A";
    $edad=56;
    $sueldo=1000.45;
    $isAdmin=true;

    echo "\$sueldo es de tipo: ".gettype($sueldo);

    echo "<br>";
    echo "la edad mas el sueldo=".$edad+$sueldo;
    echo "<br>";
    echo "la nombre mas el sueldo=".$nombre+$sueldo;
    //-----------------------------------------------------------
    $resultado=$nombre+$sueldo;
    echo "<br>\$resultado es de tipo: ".gettype($resultado);
    is















    ?>
</body>

</html>