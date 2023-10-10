<?php
session_start();
function pintarError(string $nombre)
{
    if (isset($_SESSION[$nombre])) {
        echo "<p class='text-red-600 text-sm italic mt-2'>" . $_SESSION[$nombre] . "</p>";
        unset($_SESSION[$nombre]);
    }
}




if (isset($_POST['btnLogin'])) {
    //Procesamos todo
    //1.- Cojo los campos del form
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $errores = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores = true;
        $_SESSION['errEmail'] = "*** Debes introducir en email válido.";
    }
    if (strlen($password) < 3) {
        $errores = true;
        $_SESSION['errPassword'] = "*** El pass debe conterner al menos 3 caracteres.";
    }
    if ($errores) {
        header("Location:{$_SERVER['PHP_SELF']}");
        die();
    }
    //si he llegado aqui el email y el password han pasado el filtro
    require "usuarios1.php";
    foreach($usuarios as $datosUsuario){
        if($email == $datosUsuario[0] && $password == $datosUsuario[1]){
            $_SESSION['email']=$email;
            $_SESSION['perfil']=$datosUsuario[2];
            header("Location:portal.php");
            die();
        }
    }
    //la validacion falló
    $_SESSION['errValidacion']="*** Usuario o contraseña incorrectos";
    header("Location:{$_SERVER['PHP_SELF']}");
    die();

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
                            Sign in to your account
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com">
                                <?php
                                pintarError('errEmail');
                                ?>
                            </div>

                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <?php
                                pintarError('errPassword');
                                ?>
                            </div>

                            <button type="submit" name="btnLogin" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Log In</button>
                            <?php
                                pintarError('errValidacion');
                            ?>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
<?php } ?>