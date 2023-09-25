<?php
$user = "manolo45";
function cambiarUser(string $usuario)
{
    $user = $usuario;
    echo "<br>En la funcion \$user=$user";
}
function cambiarUser1(string $user)
{
    echo "<br>$user<br>";
    $user = "cambiando su valor";
    echo "<br>En la funcion \$user=$user";
}
//-----------------------------------------------
function cambiarUser2(string &$user)
{
    echo "<br>$user<br>";
    $user = "cambiando su valor";
    echo "<br>En la funcion \$user=$user";
}
//--------------------------------------
function cambiarUser3(string $user)
{
    global $user;
    echo "<br>$user<br>";
    $user = "cambiando su valor";
    echo "<br>En la funcion \$user=$user";
}
function cambiarValor(string $valor="No se asigno el valor!!"): string{
    return $valor;
}
function cambiarValor1(&$var, $valor="No asignado"): void{
    $var=$valor;
}
function cambiarValor2($valor="No asignado"): void{
    global $variable1;
    $variable1=$valor;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "El usuario es: $user";
    echo "<hr>";

    cambiarUser("Perico78");
    echo "<br>Fuera de la funcion \$user=$user";

    //----------------------------------------------------------
    echo "<hr>";
    cambiarUser1($user);
    echo "<br>Fuera de la funcion cambiarUser1 \$user=$user";
    //pasando por referencia
    echo "<hr>";
    cambiarUser2($user);
    echo "<br>Fuera de la funcion cambiarUser1 \$user=$user";
    
    //usando la palabra reservada global
    echo "<hr>";
    cambiarUser3($user);
    echo "<br>Fuera de la funcion cambiarUser1 \$user=$user";
    //-----------------------------------------------------
    $nombre="Vicente Andres";
    $nombre=cambiarValor();
    echo "<hr><hr>El nombre es: $nombre";
    //-----------
    $variable="IES AL-ANDALUS";
    cambiarValor1($variable, "IES LA GRANJA");
    echo "<hr><hr>El nombre es: $variable";
    //-----------------------
    $variable1="IES AL-ANDALUS SEGOVIA";
    cambiarValor2("IES LA GRANJA SEGOVIA");
    echo "<hr><hr>El nombre es: $variable1";

    ?>
</body>

</html>