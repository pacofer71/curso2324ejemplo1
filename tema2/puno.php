<?php
$provincias = [
    'Almeria',
    'Cadiz',
    'Cordoba',
    'Huelva',
    'Granada',
    'Jaen',
    'Málaga',
    'Sevilla'
];
//procesamos el formulario
$nombre=trim($_POST['nombre']);
$email=trim($_POST['email']);
$pass=trim($_POST['password']);
$prov=$_POST['provincia'];
$micro=0;
if(isset($_POST['procesador'])){
    $micro=(int) $_POST['procesador'];  //1,2,3,4
}

$dep="";
if(isset($_POST['deportes'])){
    $dep=$_POST['deportes'];
}
var_dump($_POST);
//die();
if(strlen($nombre)<5){
    echo "<br>Error el nombre debe tener 5 caracteres";
    //die(); //detiene toda la ejecucion php de la página
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "<br>Dirección de email incorrecta!!!!";
}
if(strlen($pass)<6){
    echo "<br>Error el password debe tener al menos 6 caracteres";
    //die(); //detiene toda la ejecucion php de la página
}
if(!in_array($prov, $provincias)){
    echo "<br>Error la provincia NO es correcta o no elegiste ninguna";
}
if($micro<1 || $micro >4){
    echo "<br>Opcion Procesador inválida o no seleccion ninguno!!!!";
}
if(is_array($dep)){
    //me han llegado cosas por el formularios por los check
    foreach($dep as $item){
        if($item<1 || $item>4){
            echo "<br>Opción Deporte incorrecto!!!!!!";
            break;
        }
    }
}else{
    echo "<br>Opción Deporte no seleccionado!!!!!!";
}

// if($prov=="-1"){
//     echo "<br>Error la provincia NO es correcta o no elegiste ninguna";
// }
