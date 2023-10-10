<?php
    if(isset($_POST['btnReset'])){
        setcookie("contador", "pepe", time()-100);
        header("Location:uno.php");
        die();
    }
    if(isset($_COOKIE['contador'])){
        setcookie("contador", $_COOKIE['contador']+1, time()+5*24*60*60);
        $mensaje="Ha visitado la página: <b>".$_COOKIE['contador']."</b> veces";
    }else{
        $mensaje="Es la primera vez que visita la página";
        setcookie("contador", 1, time()+5*24*60*60);
    }
    //------------------------------------------------------------
    if(!isset($_COOKIE['fecha'])){
        $mensajeFecha="<br>Es la primera vez que visitas nuestro fantástico Portal";
        setcookie('fecha', date("m-d-Y, H:i:s"), time()+7*24*60*60);

    }else{
     
     
        $mensajeFecha = "<br>Visitaste nuestro sitio por última vez: <b>".$_COOKIE['fecha']."</b>";
        setcookie('fecha', date("m-d-Y, H:i:s"), time()+7*24*60*60);

    }
?>
<!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tailwindcss -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- CDN Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Document</title>
    </head>

    <body class="p-8">
        <?php
           // $fechaActual = date("d-m-Y H:i:s");
           // echo $fechaActual;
           echo $mensaje;
        ?>
        <br>
        <form method="POST" action="uno.php">
            <button name="btnReset" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Resetear Contador
            </button>
        </form>
    <?php
        echo $mensajeFecha;
        ?>
    </body>
    </html>