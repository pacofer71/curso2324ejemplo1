<?php
    function pintarTabla(int $f, int $c): void{
         echo "<hr>";
         echo "<table border='3' align='center'>";
         for($i=0; $i<$f; $i++){
            echo "<tr>";
            for($j=0; $j<$c; $j++){
                echo "<td>Celda[$i][$j]</td>";
            }
            echo "</tr>";
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
        /*
        echo gettype($f);
        echo "<br>";
        echo gettype($c);
        echo "<br> f=$f y c=$c";
        //echo "*** filas=$f, columnas=$c ***";
        */
        if($f<=0 || $c<=0){
            mostrarError("El parametro por get 'fil' y 'col' deben ser un número entero positivo!!!");
        }
        else{
            pintarTabla($f, $c);
        }
    }else{
        mostrarError("falta pasar fil o col o quizás los dos!!!");
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
