<?php

include_once 'AbstractPizza.php';

class PepperoniPizza extends AbstractPizza {

    public function __construct()
    {
        $this->pizzaType = "Пепперони";
    }

}