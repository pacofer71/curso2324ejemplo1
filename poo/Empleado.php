<?php
require "Persona.php";
class Empleado extends Persona{
    private string $sucursal;

    public function __construct($nombre, $edad, $puesto, $sucursal)
    {
        parent::__construct($nombre, $edad, $puesto);
        $this->sucursal=$sucursal;
    }

    public function __toString(): string
    {
        return parent::__toString().", <b>Puesto:</b> ".$this->sucursal;
    }

}

$empleado1=new Empleado("pedro", 56, "Becario", "Almeria");
echo $empleado1;