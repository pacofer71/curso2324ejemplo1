<?php
$suma = function(int|float $a, int|float $b){
    return $a+$b;
};
echo $suma(2, 5.6);

$suma1 = fn($a, $b)=>$a+$b;

echo "<br>";
echo $suma1(2, 5.6);

$saludo=function(string $nombre="anonimo"){
    echo "<br><b>Hola $nombre</b>";
};

$saludo("Juan  Manuel");
$saludo();
//------------------------------------------------------
$array1=range(1,50);
function buscarPares(array $prueba): array{
    $pares=[];
    foreach($prueba as $v){
        if($v%2==0) $pares[]=$v;
    }
    return $pares;
}
//echo "<hr>";
//var_dump(buscarPares($array1));

function buscarMultTres(array $datos): array{
    $multiplos=[];
    foreach($datos as $v){
        if($v%3==0) $multiplos[]=$v;
    }
    return $multiplos;

}
//echo "<hr>";
//var_dump(buscarMultTres($array1));
//------------------------------------------------------------------------------
$pares=fn(int $num)=> ($num%2==0) ? true : false;
$multTres = function(int $num){
    return ($num%3==0) ? true : false;
};
function filtrarArray(array $datos, callable $filtro): array{
    $devolver=[];
    foreach($datos as $v){
        if($filtro($v)) $devolver[]=$v;
    }
    return $devolver;
}
echo "<br>";
var_dump(filtrarArray($array1, $pares));
echo "<br>";
var_dump(filtrarArray($array1, $multTres));
//------------------------------------------------------------
$arrayMultSiete=filtrarArray($array1, function(int $n){
    return ($n%7==0) ? true : false;
});
echo "<hr>";
var_dump($arrayMultSiete);
//----------------
echo "<hr>";
var_dump(array_filter($array1, $pares));

