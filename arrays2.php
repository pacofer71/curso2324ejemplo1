<?php
$provAnd=[
    'Almeria', 
    'Cádiz', 
    'Cordoba', 
    'Granada', 
    'Huelva', 
    'Jaen', 
    'Málaga', 
    'Sevilla'];
$provExt=['Cáceres', 'Badajoz'];
$provVal=['Alicante', 'Castellón', 'Valencia'];
$total=[
    'Andalucia'=>$provAnd,
    'Extremadura'=>$provExt,
    'Valencia'=>$provVal
];
//shuffle($provAnd);
//echo $provAnd[0];
//echo "<br>";
//metodo de ordenacion de arrays
// Metodo sort()----------------------------------------------------------
$nombres=["Zacarias", "Ana", "Mohamed", "Pedro"];
echo "Antes de ordenar<br>";
print_r($nombres);
sort($nombres);
echo "<br>Despues de ordenar con sort<br>";
print_r($nombres);
// Metodo rsort()--------------------------------------------------------------
$nombres1=["Zacarias", "Ana", "Mohamed", "Pedro"];
echo "Antes de ordenar<br>";
print_r($nombres1);
rsort($nombres1);
echo "<br>Despues de ordenar con rsort<br>";
print_r($nombres1);
//..-----------------
$datos=[
    'uno'=>'Mi primer dato',
    'dos'=>'Ana',
    'tres'=>'Zacarias'
];
sort($datos);
echo "<hr>";
print_r($datos);
//-------------------------
echo "<hr>";
rsort($total);
print_r($total);
//-------------------------------------metodo ksort
$datos1=[
    'uno'=>'Mi primer dato',
    'dos'=>'Ana',
    'tres'=>'Zacarias'
];
ksort($datos1);
echo "<br>------------------------------------------------------------------<br>";
print_r($datos1);
//------------------------------------------------- Método krsort()
$datos2=[
    'Uno'=>'Mi primer dato',
    'dos'=>'Ana',
    'tres'=>'Zacarias',
    'A'=>"valor de a",

];
krsort($datos2);
echo "<br>probando krsort <br>";
print_r($datos2);
//------------------------------------------------------ Método asort() arsort()
$datos3=[
    'Uno'=>'a',
    'dos'=>'z',
    'tres'=>'j',
    'A'=>"p",

];
asort($datos3);
echo "<br>Probando asort()<br>";
print_r($datos3);
// explode, implode, compact , in_array()
//Funcion compact
echo "<hr><hr>";
$nom="Juan";
$email="juan@email.es";
$datos=compact('nom', 'email');
// ['nom'=>'Juan', 'email'=>'juan@email.es];
print_r($datos);

//implode 
$datos=["Juan", "juan@correo.es", 'Almeria', 'Jefe'];
$datos1=implode("<-->", $datos);
echo "<br>$datos1";
//explode
$datos="user::/home/user::/bin/bash::*****";
$datosAsArray=explode("::", $datos);
echo "<br>";
print_r($datosAsArray);
$nombreTotal="juan,fernandez,juan@email.es,al,eria";
//----------------------------------------------------------------------------------
$comunidades=[
    'Madrid'=>['Madrid'],
    'Extremadura'=>['Caceres', 'Badajoz'],
    'Andalucia'=>['Sevilla', 'Granada', 'Almeria'],
    'Galicia'=>['La Coruña', 'Orense', 'Lugo', 'Pontevedra'],
];

ksort($comunidades);
foreach($comunidades as $c=>$p){
    sort($comunidades[$c]);
    //sort($p);
}
echo "<hr>";
print_r($comunidades);
//------------------------------------------------------------------------------------
echo "<br>Esto es una cadena".PHP_EOL; // es como el \n
//------------------------------------------------
echo"<hr><br><br>";
var_dump($_SERVER);
echo "<hr>";
echo $_SERVER['PHP_SELF'];






