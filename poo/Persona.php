<?php
class Persona
{
    public function __construct(
        protected string $nombre,
        protected int $edad,
        public string $puesto
    ) {}

    public function __toString(): string
    {
        return "<br><b>Nombre: </b>".$this->nombre.", <b>Edad:</b> ".$this->edad.", <b>Puesto</b>: ".$this->puesto;
    }
}
$persona = new Persona("manolo", 23, "Jefe");
echo $persona;