<?php
class Usuario
{
    private string $username;
    private string $ciudad;
    private int $perfil;
    public static int $contador = 0;
    private static int $contador2=0;

    public function __construct()
    {
        self::$contador++;
        self::$contador2++;
        $num = func_num_args();
        //echo "<br>$num<br>";
        switch ($num) {
            case 0:
                break;
            case 1:
                $this->username = func_get_arg(0);
                break;
            case 3:
                $this->username = func_get_args()[0];
                $this->ciudad = func_get_arg(1);
                $this->perfil = func_get_arg(2);
                break;
            default:
                die("<br>Error al crear el objeto!!!");
        }
    }
    public static function setContador2(int $num){
        self::$contador2=$num;
        
    }
    public static function getContador2(): int{
        return self::$contador2;
    }

    /**
     * Get the value of username
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set the value of username
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of ciudad
     */
    public function getCiudad(): string
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     */
    public function setCiudad(string $ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of perfil
     */
    public function getPerfil(): int
    {
        return $this->perfil;
    }

    /**
     * Set the value of perfil
     */
    public function setPerfil(int $perfil): self
    {
        $this->perfil = $perfil;

        return $this;
    }

}

//$usuario1= new Usuario();


//$usuario1->setUsername("manolo")
//    ->setCiudad("Granada")
//    ->setPerfil(34);
//$usuario1->setUsername("manolo");
//$usuario1->setCiudad("Almeria");
//$usuario1->setPerfil(50);


//$usuario5=new Usuario("pedro", "Bilbao");
//var_dump($usuario5);
//echo $usuario1->ciudad;

$usuario1 = (new Usuario)->setUsername("manolo")
    ->setCiudad("Granada")
    ->setPerfil(34);
var_dump($usuario1);
echo "<hr>";
$usuario2 = new Usuario("Federico");
var_dump($usuario2);
echo "<br>";
$usuario3 = new Usuario("pedro", "Madrid", 123);
var_dump($usuario3);
echo "<br>";
echo "<br>".Usuario::$contador;
echo "<br>";
echo "<br>".$usuario2::$contador;
Usuario::$contador=123;
echo "<br>";
echo "<br>".Usuario::$contador;
echo "<br>";
echo "<br>".$usuario2::$contador;
//--------------------------------------------------------
Usuario::setContador2(200);
$usuario1::getContador2();
Usuario::getContador2();
$usuario3::getContador2();


