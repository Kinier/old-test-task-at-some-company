<?php

include_once 'AbstractPizza.php';

class MushroomPizza extends AbstractPizza {

    public function __construct()
    {
        $this->pizzaType = "Грибная";
    }

}