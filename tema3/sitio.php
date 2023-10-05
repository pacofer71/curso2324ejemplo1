<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:uno.php");
    die();
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
<?php
echo ($_SESSION['perfil'] == 100) ? "<body style='background-color:red'>" : "<body>";
?>
<div class="flex my-4 p-8">
    <div class="flex-1 w-full">
        Bienvenido al sitio, estás logeado como: <?php echo $_SESSION['email']; ?>
    </div>
    <div>
        <a href="cerrar.php" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Log Out</a>
    </div>
</div>
<div class="flex my-4 p-8">
    <div>
    <a href="portalusuario.php" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class="fa-solid fa-users"></i> Portal usuarios</a>

    </div>
    <?php
    if($_SESSION['perfil']==100){
    echo <<<TXT
        <div class="ml-4">
        <a href="portaladmin.php" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i class="fa-solid fa-users-gear"></i> Portal Admin</a>
    </div>
    TXT;
    }
    ?>
</div>

</body>

</html>