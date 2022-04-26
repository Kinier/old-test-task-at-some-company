<?php

include_once 'AbstractPizza.php';

class VillagePizza extends AbstractPizza {

    public function __construct()
    {
        $this->pizzaType = "Деревенская";
    }

}