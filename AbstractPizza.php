<?php


abstract class AbstractPizza {
    protected string $pizzaType;
    protected int $pizzaSize;

    protected string $pizzaSouce = "недоступен или не выбран для данной пиццы";

    public abstract function __construct();

    /**
     * @return string
     */
    public function getPizzaType(): string
    {
        return $this->pizzaType;
    }


    public function getPizzaSize() : int{
        return (int)$this->pizzaSize;
    }

    public function getPizzaSouce() : string{
        return $this->pizzaSouce;
    }

    public function setPizzaSouce(string $souce){
        $this->pizzaSouce = $souce;
    }

    public function setPizzaSize(int $size){
        $this->pizzaSize = $size;
    }

}