<?php
function pintarTabla(array $datos){   //['Andalucia'=>['Almeria', '',...]]
    echo "<hr>";
    echo "<table border='4'>";
    foreach($datos as $nomCom=>$prov){
    echo "<tr>";
    echo "<td colspan='".count($prov)."'>$nomCom</td>";
    echo "</tr>";
    echo "<tr>";
        foreach($prov as $nomProv){
            echo "<td>$nomProv</td>";
        }
    echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
}
$prov=['Almeria', 'Cordoba'];
// $prov1=array('Almeria', 'Cordoba');
// $prov2=[];
// $prov3=array();
//---------- print_r(), var_dump()
print_r($prov);
echo "<br>";
var_dump($prov); //esto sirve para cualquier tipo de dato
//-----------------------------------------------
$prov[]="Cadiz";
echo "<br>";
var_dump($prov);
//-----------------------------------------------
$prov[1]="Cadiz";
echo "<br>";
var_dump($prov);
//-----------------------------------------------
$prov[15]="Granada";
echo "<br>";
print_r($prov);
//-----------------------------------------------
$prov[]="Málaga";
echo "<br>";
print_r($prov);
//-----------------------------------------------
$prov[6]="Valencia";
echo "<br>";
print_r($prov);
//-----------------------------------------------
$prov[-1]="Alicante";
echo "<br>";
print_r($prov);
echo "<br>$prov[-1]";
//-------------------------------------------------------
unset($prov[0]);
echo "<br>";
print_r($prov);
//--------------------------------------------
$prov[0]="Almería";
echo "<br>";
print_r($prov);
//----------------------
echo "<br>la longitud de \$prov es: ".count($prov);
//-------------------------------------------------------------------
//---------------Arrays asociativos (clave/valor)
$datos1=[
    'nombre'=>"Manolo",
    'Apellidos'=>"Fernandez Perez",
    'edad'=>56,
    'isAdmin'=>false,
    12=>'Dato libre',
];
echo "<hr>";
var_dump($datos1);
echo "<br>$datos1[12]";
echo "<br>El nombre es: {$datos1['nombre']}";
echo "<br>El nombre es:".$datos1['nombre'];
//-------------------------------------------------
echo "<hr><hr>";
foreach($datos1 as $k=>$v){
    echo "<br>\$datos[$k]=$v";
}
echo "<hr><hr>";
foreach($datos1 as $v){ //si solo quiero los valores;
    echo "$k<br>";
}
//----------arrays de mas de una dimension;
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



echo "<hr>";
print_r($total);
echo "<br>------------------------LISTA--------------------------";
echo "<ol>";
foreach($total as $com=>$prov){
    echo "<li>$com</li>";
    echo "<ol>";
    foreach($prov as $nombre){
        echo "<li>$nombre</li>";
    }
    echo "</ol>";
}
echo "</ol>";
//--------------------------------
foreach($total as $comunidad=>$provincias){
    pintarTabla([$comunidad=>$provincias]);  //['Andalucia'=>['Almeria', '',...]]
}



































