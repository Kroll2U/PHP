
<?php

    $foods = array("apple", "orange", "banana", "coconut");


    array_push($foods, "pineaple"); // dodaje na koncu nowa wartosc
    array_pop($foods); // usuwa ostatni elemnt
    array_shift($foods); //usuwa pierwszy element
    $foods = array_reverse($foods); // odwraca tablice
    echo count($foods) . "<br>";
    foreach($foods as $food){
            echo $food. "<br>";
    }
?>

