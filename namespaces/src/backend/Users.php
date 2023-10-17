<?php
namespace src\backend;

class Users{
    public function __construct(
        private string $nombre
    )
    {
        echo "<br> Soy un usuario del backend";
    }
}