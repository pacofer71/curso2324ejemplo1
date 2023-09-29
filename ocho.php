<?php
$dia="l";
switch($dia){
    case "lunes":
        echo "Hoy es lunes";
        break;
    case "martes":
        echo "Hoy es martes";
        break;
    default:
        echo "No es ni lunes ni martes!!!";
}
$numero=7;
echo "<br>";
switch($numero){
    case 1:
        echo "el numero es 1";
        break;
    default:
    echo "El numero No es 1";
}
//-------------------------------------------------match un switch tuneado
echo "<hr>";
$edad=3;
$result=match(true){
    $edad>=65 => "Senior",
    $edad>=25 => "Adulto",
    $edad>=18 =>"Joven",
    default =>"Niño"
};
echo $result;
//-----------------
$x=901;
match($x){
    1,2,3=>pintarMensaje("Hola eres 1, 2 o 3"),
    4=>pintarMensaje("Hola eres 4"),
    default=>pintarMensaje("No se lo que eres"),
};
function pintarMensaje($txt){
    echo "<br>$txt";
}
//FrizBuzz 5, Frizz, 7 Buzz, 5 y 7 FrizzBuzz (1 a 100)
function frizzBuzz($num){
    echo match(0){
        $num%35=>"FrizzBuzz, ",
        $num%5=>"Frizz, ", 
        $num%7=>"Buzz, ",
        default => "$num, "
    };
}
echo "<br><center>___________________ FRIZZBUZZ____________________________</center><br>";
for($i=1; $i<=100; $i++){
    frizzBuzz($i);
}











