<?php
require "./src/backend/Users.php";
require "./src/frontend/Users.php";
require "./src/Admin.php";

use src\backend\Users;
use src\fronted\Users as FrontenUsers;
//use src\Admin;

$usuario = new Users("pedro");
$usuario2 = new FrontenUsers("juan");
$admin=new src\Admin(); 

