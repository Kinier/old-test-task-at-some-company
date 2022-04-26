<?php

include_once "database/DatabaseConnectPDO.php";
include_once "database/DatabaseRequests.php";
include_once "apiBank/api.php";

class Price{


    /**
     *
     * Возвращает цену в рублях
     * @param object $pizza
     * @return int
     */
    public static function count(object $pizza): int
    {
        $type = $pizza->getPizzaType();
        $size = $pizza->getPizzaSize();
        $price = 0;

        $request = new DatabaseRequests;

        $price += $request->getTypePrice($type); // добавляем здесь
        $price += $request->getSizePrice($size); // добавляем здесь
        //


        return api::USDtoBy() * $price;
    }


}