<?php
    function isPrimo(int $n): bool{
        if($n==1) return true;
        for($i=2; $i<$n; $i++){
            if($n%$i==0) return false;
        }
        return true;
    }
    //----------------------------------------------------
    function pintarPrimos(int $cant){
        echo "Los primeros <b>$cant</b> números primos son:<br>";
        for($i=1; $cant>0; $i++){
            if(isPrimo($i)){
                echo "$i, ";
                $cant--;
            }
        }
    }
    //---------------------------------------------
    function mostrarError(string $txt): void{
        echo "<p style='color:red'>$txt</p>";
    }
    //------------------------------------------------------
    if(!isset($_GET['num'])){
        mostrarError("Debes pasar por get el parametro num!!!!");
    }else{
        $num=(int) $_GET['num'];
        if($num>0){
            pintarPrimos($num);
        }else{
            mostrarError("El parámetro num debe ser entero positivo!!!!");
        }
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
    
</body>
</html>