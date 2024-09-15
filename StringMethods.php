

<?php
$username = "Krzy Ro";
$phone="123-345-123";
$username = strtolower($username); zamienia na wszystko z małych
$username = strtoupper($username); zamienia na wszystko z wielkich
$username = trim($username); usuwa białe znaki
$username = str_pad($username, 20 , "0"); uzupełnia username do max 20 znaków znakiem "0"
$phone = str_replace("-", "", $phone); zmeiania "-" na ""
$phone = strrev($username); od tyłu
$phone = str_shuffle($username); losowa kolejnosc liter
$equals = strcmp($username, "Krzy Ro");  sprawdza czy zmienan i to co obok to to samo
$equals = strlen($username); liczy ilosc znakow

$equals = substr($username, 0, 4); wypisuje znaki od indexa 0 do 4
$equals = strpos($username, " "); szuka pierwszej " " (spacji) w ciagu znakow i daje jej index

echo $equals;

$fullname = explode(" " , $username); wyrazy odzielone spacja zamienia w osobne elem tablicy

foreach($fullname as $name){
    echo $name . "<br>";
};

$fullname = implode(" ", $fullname); odwrodnosc explode zamienia tablice w stringa
echo $fullname;
?>


