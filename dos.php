<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1=123;
    $num2=123;
    if($num1>$num2){
        echo "$num1 es mayor que $num2";
    }elseif($num2>$num1){
        echo "$num2 es mayor que $num1";
    }else{
        echo "$num1 = $num2";
    }
    echo "<hr>";
    //-----------------------------------------------------------------
    for($i=0; $i<10; $i++){
        echo "$i<br>";
    }
    //---------------
    echo "<br>";
    $var=0;
    do{
        echo $var++;
        echo "<br>";

    }while($var<10);
    //------------------------
    echo "<br>";
    $var1=0;
    while($var1<10){
        echo $var1++;
        echo "<br>";
    }
    //--------------------------------

    ?>
</body>
</html>