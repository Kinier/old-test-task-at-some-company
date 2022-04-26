<?php
include_once "HawaiiPizza.php";
include_once "MushroomPizza.php";
include_once "VillagePizza.php";
include_once "PepperoniPizza.php";
include_once "Price.php";

if (!empty($_POST)){
    switch ($_POST['type']){
        case 'Пепперони':
            $pizza = new PepperoniPizza();
            $pizza->setPizzaSize($_POST['size']);
            $pizza->setPizzaSouce($_POST['souce']);
            echo json_encode([
                'price' => Price::count($pizza),
                'size' => $pizza->getPizzaSize(),
                'type' => $pizza->getPizzaType(),
                'souce' => $pizza->getPizzaSouce()
            ]);
            break;
        case 'Гавайская':
            $pizza = new HawaiiPizza();
            $pizza->setPizzaSize($_POST['size']);
            echo json_encode([
                'price' => Price::count($pizza),
                'size' => $pizza->getPizzaSize(),
                'type' => $pizza->getPizzaType(),
                'souce' => $pizza->getPizzaSouce()
            ]);
            break;
        case 'Деревенская':
            $pizza = new VillagePizza();
            $pizza->setPizzaSize($_POST['size']);
            $pizza->setPizzaSouce($_POST['souce']);
            echo json_encode([
                'price' => Price::count($pizza),
                'size' => $pizza->getPizzaSize(),
                'type' => $pizza->getPizzaType(),
                'souce' => $pizza->getPizzaSouce()
            ]);
            break;
        case 'Грибная':
            $pizza = new MushroomPizza();
            $pizza->setPizzaSize($_POST['size']);
            echo json_encode([
                'price' => Price::count($pizza),
                'size' => $pizza->getPizzaSize(),
                'type' => $pizza->getPizzaType(),
                'souce' => $pizza->getPizzaSouce()
            ]);
            break;
        default:
            // todo потом доделать )
            break;
    }


    exit();
}
readfile('views/template.php');
