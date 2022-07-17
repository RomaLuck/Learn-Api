<?php
//$ar = [];

class easyTestApi{
        
    static function takeApi($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);
        $j= json_decode($res);
        curl_close($ch);
        return $j;
    }
}
