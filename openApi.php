<?php
require './takeApi.php';

$file = 'Chuck.json';
$url1 = "https://api.chucknorris.io/jokes/categories";
$url2 = "https://api.chucknorris.io/jokes/random?category=";

$arr = easyTestApi::takeApi($url1);

$array = [];

foreach ($arr as $ar){
 $array[] = easyTestApi::takeApi($url2."$ar")->value."<br>";
 $array[] =  easyTestApi::takeApi($url2."$ar")->value."<br>";
}

$j = json_encode($array);
if(file_exists($file)){
    file_put_contents($file, $j);
    echo "recorded";
}
else{
    echo "file is not exist";
}

