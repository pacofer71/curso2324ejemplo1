<?php
    function isPrimo(int $num): bool{
        if($num==1) return true;
        for($i=2; $i<$num; $i++){
            if(($num%$i)==0) return false;
        }
        return true; 
    }
    
    //funcion para pintar una tabla html de 'f' filas y 'c' columnas

    function pintarTabla(int $f, int $c, string $msg="Sin mensaje" ): void{
        echo "<hr>";
        echo "<table border='4' align='center'>";
        for($i=0; $i<$f; $i++){
            echo "<tr>";
            for($j=0; $j<$c; $j++){
                echo "<td>$msg</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<hr>";
    }
    //-----------------------------------------------------------------------

    function tipoFruta(string $nombre, string $tipo="Sin definir"): void{
        echo "<hr><br>El nombre es: $nombre y el tipo $tipo";
    }
    //lo de abajo estaria mal
    function tipoFruta2(string $tipo="Sin definir", string $nombre): void{
        echo "<hr><br>El nombre es: $nombre y el tipo $tipo";
    }
    //-----------------------------------------------
    function pintarDatos($nombre, $apell, $cargo="Sin Cargo", $ciudad="Sin especificar"){
        echo "<br>Los datos son: nombre: $apell, $nombre<br>";
        echo "Cargo= $cargo<br>";
        echo "Ciudad= $ciudad";
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
        $num=19;
        $cont=0;
        for($i=1; $i<=$num; $i++){
            if($num%$i==0) {
                $cont++;
                echo "$i, ";
            }

        }
        echo "<br>El número <b>$num</b> tiene $cont divisores";
        
        //-------------------------------------------------
        echo "<hr>";
        $cont=0;
        $numero=13123123123123123199911111111;
        for($i=2; $i<$numero; $i++){
            if(($numero%$i)==0){
                $cont++;
                break;
            }
        }
        if($cont!=0){
            echo "El numero: $numero <b>NO</b> es primo";
        }else{
            echo "El numero: $numero <b>SI</b> es primo";
        }

    ?>
    <hr><hr>
    <?php
        $numero=10;
        $cant=0;
        for($i=1; $i<=$numero; $i++){
            if(isPrimo($i)){
                echo "$i, ";
                $cant++;
            }
        }
        echo "<br>En total había <b>$cant</b> numeros primos";
        echo "<hr>";
        //---------------------------------------------------------------------
        $cant=5;
        $num=1;
        do{
            if(isPrimo($num)){
                $cant--;
                echo "$num, ";
            }
            $num++;
        }while($cant>0);

        echo "<br>Forma 2<br>";
        $cant=100;
        for($i=1;$cant>0;$i++){
                if(isPrimo($i)){
                    $cant--;
                    echo "$i, ";
                }
        }
        //-----------------------
        echo "<hr>";
        $num2=345;
        $num1=567;
       
        echo "<hr>";
        for($i=min($num1, $num2); $i<=max($num1, $num2); $i++){
            if(isPrimo($i)){
                echo "$i, ";
            }
        }
        //------------------------------
        //pintarTabla(f: 4,c: 5, msg: "tabla1");
        //pintarTabla(3,3);
        //pintarTabla(msg: "Manolo",c: 45,f: 56);
        //-----------------------
        
        tipoFruta("Limon", "Citrico");
        tipoFruta("Papaya");
        tipoFruta2("Citrico", "Limon");
       // tipoFruta2(nombre: "Papaya");
       pintarDatos("Pedro", "Lopez", "Jefe", "Almeria");
       pintarDatos("Juan", "Sanchez", "Granada");
       pintarDatos("Ismael", "Perez");


    ?>

</body>
</html>