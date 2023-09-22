<?php
//Haremos un programa que me pasara por get fil y col
//y pintaremos una vez comprobado que me han llegado
//los datos y validados los mismos una tabla html
// de esas fils y columas cada fila de un color diferente
//los colores html son #XXXXXX con X una cifra hexadecimal (0-9, A-F)
function pintarTabla(int $f, int $c): void{
    echo "<hr>";
    echo "<table border='3' align='center'>\n";
    for($i=0; $i<$f; $i++){
        $color="#".random_int(100000, 999999);
       echo "<tr style='background-color:$color'>\n";
       for($j=0; $j<$c; $j++){
           echo "<td>Celda[$i][$j]</td>\n";
       }
       echo "</tr>\n
       
       ";
    }
    echo "</table>";
}
//---------------------------------------------------------------------------------------
function mostrarError(string $txt){
   echo "<p style='color:red'>$txt</p>";
}
//-----------------------------------------------------------------------------------------------
//1.- vemos si en la url vienen los arametros que necesitamos
//fil, col
if(isset($_GET['fil']) && isset($_GET['col'])){
   $f= (int) $_GET['fil'];
   $c=(int) $_GET['col'];
   if($f<=0 || $c<=0){
       mostrarError("El parametro por get 'fil' y 'col' deben ser un número entero positivo!!!");
   }
   else{
       pintarTabla($f, $c);
   }
}else{
   mostrarError("falta pasar fil o col o quizás los dos!!!");
}
