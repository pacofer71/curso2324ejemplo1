<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:login.php");
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
    <title>Portal</title>
</head>

<body style="background-color:gold">
    <div class="flex p-8 mx-auto">
        <div class="flex-1">
            Bienvenido: <span class="text-blue-600"><?php echo $_SESSION['email'] ?></span>
        </div>
        <div class="ml-4">
            <a href="cerrar1.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Logout
            </a>

        </div>
        <?php
            if($_SESSION['perfil']){
                echo <<<TXT
                <div class="ml-4">
                <a href="admin.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Ir a Admin
                </a>
                </div>
            TXT;

       
            }
        ?>
    </div>

</body>

</html>