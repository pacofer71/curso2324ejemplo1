<?php
session_start();
//$num=random_int(1,100);
if (!isset($_SESSION['aleatorio'])) {
    $_SESSION['aleatorio'] = random_int(1, 100);
}
$num=$_SESSION['aleatorio'];

if (!isset($_SESSION['intento'])) {
    $_SESSION['intento'] = 0;
}
function mostrarMensaje($var)
{
    if (isset($_SESSION[$var])) {
        $cad = $_SESSION[$var];
        unset($_SESSION[$var]);
        return $cad;
    }
}
if (isset($_POST['btn'])) {
    $miNumero = (int) trim(htmlspecialchars($_POST['minumero']));
    if ($miNumero <= 0 || $miNumero > 100) {
        $_SESSION['error'] = "*** Debes introducir un número entre 1 y 100";
        header("Location:{$_SERVER['PHP_SELF']}");
        die();
    }
    if ($miNumero > $num) {
        $_SESSION['intento'] = $_SESSION['intento'] += 1;
        $_SESSION['info'] = "El número buscado es MENOR, llevas " . $_SESSION['intento'] . " intentos";
    } elseif ($miNumero < $num) {
        $_SESSION['intento'] = $_SESSION['intento'] += 1;
        $_SESSION['info'] = "El número buscado es MAYOR, llevas " . $_SESSION['intento'] . " intentos";
    } else {
        $_SESSION['intento'] = $_SESSION['intento'] += 1;
        $_SESSION['info'] = "Acertaste, has necesitado: " . $_SESSION['intento'] . " intentos";
        $_SESSION['reset'] = true;
    }
    header("Location:{$_SERVER['PHP_SELF']}");
} else {
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

    <body>
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Adivina un número (1-100).<?php echo $num; ?>
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div>
                                <label for="numero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu número</label>
                                <input type="number" name="minumero" id="numero" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Piensa un número...">
                                <input type="text" value="<?php echo mostrarMensaje('info') ?>" class="mt-4 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" readonly>

                                <?php
                                echo "<p class='mt-2 text-red-600 italic text-sm'>" . mostrarMensaje('error') . "</p>";
                                ?>
                            </div>
                            <div class="flex flex-row-reverse">

                                <button type="submit" name="btn" class="ml-4 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" <?php if (isset($_SESSION['reset'])) echo "disabled"; ?>>ENVIAR</button>
                                <a href="reset.php" class="text-white bg-yellow-600 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">NUEVO JUEGO</a>


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
<?php
}
?>