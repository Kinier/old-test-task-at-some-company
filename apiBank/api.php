<?php

class api{
    public static function USDtoBy() : float|bool{


        $ch = curl_init('https://www.nbrb.by/api/exrates/rates/431');
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        $result = json_decode(curl_exec($ch));

        if (isset($result)){
            return $result->Cur_OfficialRate;
        }else{
            echo false;
        }

    }
}