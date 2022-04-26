<?php

class DatabaseRequests{
    public PDO $smth;

    public function __construct()
    {
        $db = new DatabaseConnectPDO();
        $this->smth = $db->connect();
    }

    public function getTypePrice($type){
        $sql = "SELECT `price` FROM `types` WHERE `name`= :pizza";
        $prep = $this->smth->prepare($sql);
        $prep->execute(['pizza' => $type]);

        return $prep->fetch()["price"];
    }

    public function getSizePrice($size){
        $sql = "SELECT `price` FROM `sizes` WHERE `size`= :size";
        $prep = $this->smth->prepare($sql);
        $prep->execute(['size' => $size]);
        return $prep->fetch()["price"];
    }
}