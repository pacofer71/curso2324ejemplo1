<?php
$tipos_mime = [
    'image/jpeg',
    'image/webp',
    'image/ico',
    'image/bmp',
    'image/svg+xml',
    'image/png',
    'image/gif'
];

if (isset($_POST['btnEnv'])) {
    //hemos pulsado el boton enviar quiero porcesar el formulario
    $userName = htmlspecialchars(trim($_POST['username']));
    //$userName=trim($_POST['username']);
    echo "El nombre es: $userName";
    //----------
    //echo "<br>";
    var_dump($_FILES);
    //subimos el fichero
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        //se ha subido el fichero a la carpeta temporal
        //vamos a comprobar que EN este caso sea un fichero de imagen
        if (!in_array($_FILES['foto']['type'], $tipos_mime)) {
            //No he subido una imagen, he subido cualquier otro
            //tipo de archivo
            echo "<br>ERROR, Tipo NO permitido, debes subir una imagen";
        } else {
            // echo "<br>Has subido uma imagen";
            //vamos a compribar el tamaño, no deberá exceder los 2M
            if ($_FILES['foto']['size'] > 2000000) {
                echo "Excediste el Tamaño permitido!!!!";
            } else {
                //el tamaño es correcto
                //vamos a mover el archivo de la carpeta temp a la ubicacion deseada
                //le ponemos a la imagen un nombre unico para evitar colisiones
                $nombre = "./imagenes/" . uniqid() . "_" . $_FILES['foto']['name']; // ./imagenes/123123123_foto.jpg
                //echo "<br>$nombre";
                if(!move_uploaded_file($_FILES['foto']['tmp_name'], $nombre)){
                    echo "Error no pued mover el archivo a la ubucacion deseada";
                }else{
                    echo "Archivo guardado con éxito!!!";
                }

            }
        }
    }else{
        echo "<br>Error: >".$_FILES['foto']['error'];
    }
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
        <h3 class="py-4 text-2xl text-center">EJEMPLO</h3>
        <div class="p-4 rounded-xl border-2 border-teal-600 w-1/2 mx-auto">
            <form name="as" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="pass">
                        Password
                    </label>
                    <input name="pass" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pass" type="password" placeholder="Password">
                </div>
                <div class="mb-4 flex">
                    <div class="w-full mr-4 flex-1">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="foto">
                            Foto de perfil
                        </label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
                        <input oninput="verFoto.src=window.URL.createObjectURL(this.files[0])" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="foto" type="file" name="foto" accept="image/*">
                    </div>
                    <div>
                        <img src="./imagenes/noimage.png" id="verFoto" class="w-60" />
                    </div>
                </div>
                <div class="flex flex-row-reverse">
                    <button type="submit" name="btnEnv" class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        ENVIAR
                    </button>
                    <button tyepe="reset" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        RESET
                    </button>

                </div>

            </form>
        </div>

    </body>

    </html>
<?php
}
?>