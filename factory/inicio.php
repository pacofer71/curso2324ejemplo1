<?php
// require "./src/Plan.php";
// require "./src/BroncePlan.php";
// require "./src/PlataPlan.php";
// require "./src/OroPlan.php";
// require "./src/PlatinoPlan.php";
// require "./src/Cliente.php";
// require "./src/PlanFactory.php";
spl_autoload_register(function($nombreClase){
   //die("./src/".$nombreClase.".php");
   require "./src/".$nombreClase.".php";
});

//$manolo=new User();
$cliente1 = new Cliente(10);
$planCliente1=(new PlanFactory)->getPlan($cliente1);

echo $planCliente1::class;



