<?php

class Cliente{
    public readonly int $totalDeCompras;

    public function __construct(int $total){
        $this->totalDeCompras=$total;
    }
}