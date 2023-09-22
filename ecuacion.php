<?php
//solucionaremos una ecuacion de 2 grado donde los
//coeficientes a,b,c los mandaremos por get
//aunque b y c sean cero hat que mandarlos expresamente
function pintarError(string $txt){
    echo "<p style='color:red'>$txt</p>";
}
//-----------------------------------------------------------------------------
function validarDatos(float $a, string $b, string $c):bool{
    if($a==0){
        pintarError("El coeficiente 'a' debe ser númerico y distinto de '0' !!!!");
        return false;
    }
    if(!is_numeric($b) || !is_numeric($c)){
        pintarError("Los coeficientes 'b' y 'c' deben ser reales !!!!");
        return false;
        
    }
    return true;
}
//--------------------------------------------------------------------------------------
function resolverEcuacion(float $a, float $b, float $c){
    $dis=($b*$b)-(4*$a*$c);
    if($dis<0){
        pintarSolucion($a, $b, $c, "NO tiente solucion!!!!");
        return;
    }
    $solucion1=(-1*$b+sqrt($dis))/($a*2);
    $solucion2=(-1*$b-sqrt($dis))/($a*2);
    pintarSolucion($a, $b, $c, "$solucion1 y $solucion2");
}
//---------------------------------------------------------------------------------------
function pintarSolucion($a, $b, $c, string $txt){
    echo "Las soluciones de la ecuacion $a X<sup>2</sup> +$b X+ $c=0 Son:<br>";
    echo $txt;
}
///--------------------------------------------------------------------------------------
if(isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])){
    $a= (float) $_GET['a'];
    $b= $_GET['b'];
    $c= $_GET['c'];
    //echo " $a, $b,  $c";
    if(validarDatos($a, $b, $c)){
        $b=(float) $b;
        $c=(float) $c;
        resolverEcuacion($a, $b, $c);
    }
}else{
    pintarError("Los coeficientes a, b, c son obligatorios");
}