<?php
$prov = [
    'Almeria',
    'Cadiz',
    'Cordoba',
    'Huelva',
    'Granada',
    'Jaen',
    'Málaga',
    'Sevilla'
];

?>
<!DOCTYPE html>
<html lang="en">

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
    <h3 class="text-center text-xl my-4">FORMULARIO</h3>
    <div class="w-1/2 p-4 mx-auto border-4 border-red-400 rounded-xl">
        <form action="puno.php" method="POST">
            <div class="mb-4">
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu nombre</label>
                <input type="text" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tú nombre..." name="nombre" id='nombre' />
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu Email</label>
                <input type="email" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tú email..." name="email" id="email" />
            </div>
            <div class="mb-4">
                <label for="pass" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu Password</label>
                <input type="password" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tú password..." name="password" id="pass" />
            </div>
            <div class="mb-4">
                <label for="prov" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu Provincia</label>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="provincia" id="prov" />
                <option value="-1">Elige una provincia...</option>
                <?php
                foreach ($prov as $item) {
                    echo "<option>$item</option>";
                }
                ?>
                </select>

            </div>
            <div class="mb-4">
                <!-- RadioButtons -->
                <input type="radio" name="procesador" value='1'> INTEL
                <input type="radio" name="procesador" value='2'> AMD
                <input type="radio" name="procesador" value='3'> ARM
                <input type="radio" name="procesador" value='4' checked> OTROS
            </div>
            <div class="mb-4">
                <!-- Check -->
                <input type="checkbox" name="deportes[]" value='1'> Natación
                <input type="checkbox" name="deportes[]" value='2'>  Esgrima
                <input type="checkbox" name="deportes[]" value='3'> Runing
                <input type="checkbox" name="deportes[]" value='4' > Bicicleta
            </div>
    
    <div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-floppy-disk"></i> ENVIAR</button>
        <button type="reset" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-broom"></i> RESET</button>
    </div>
    </form>
    </div>
</body>

</html>