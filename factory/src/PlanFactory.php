<?php

class PlanFactory{
    public function getPlan(Cliente $cliente): Plan{
        return match(true){
            $cliente->totalDeCompras>=50 => new PlatinoPlan,
            $cliente->totalDeCompras>=40 => new OroPlan,
            $cliente->totalDeCompras>=20 => new PlataPlan,
            default =>new BroncePlan

        };
    }
}