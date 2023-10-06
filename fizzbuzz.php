<?php
//programa FizzBuzz
for($i=1; $i<=100; $i++){
    if($i%35==0){
        echo "FizzBuzz<br>";
        continue;
    }
    if($i%5==0){
        echo "Fizz<br>";
    }elseif($i%7==0){
        echo "Buzz<br>";
    }else{
        echo "$i<br>";
    }
}
//Forma 2 con operador ternario


echo "<hr>";
for($i=1; $i<=100; $i++){
    echo ($i%5==0) ? 
    (($i%7==0)? "FIZZBUZZ<br>" : "FIZZ<br>"): //si es mult de 5
    (($i%7==0)?"BUZZ<br>" : "$i<br>"); // si no lo es


}






