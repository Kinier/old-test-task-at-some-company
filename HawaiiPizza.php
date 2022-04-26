<?php

include_once 'AbstractPizza.php';

class HawaiiPizza extends AbstractPizza {

    public function __construct()
    {
        $this->pizzaType = "Гавайская";
    }

}