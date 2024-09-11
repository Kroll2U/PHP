
<?php
    //Tablice asocjacyjne czyli tak jakby zmienna i wartość w tablicy
    //Przy wywołaniu Poland wyskakuje Warshaw czyli wpisujesz zmienna a dostajesz wartosć
    $capitals = array("USA" => "Washington", 
    "Japan" => "Tokio", 
    "Chinese" => "Pekin", 
    "Poland" => "Warshaw");
    $capitals["USA"] = "Las Vegas";

    $keys = array_keys($capitals);
    $values = array_values($capitals);
     //array_flip(); //zamieni klucze z wartosciami

    foreach($capitals as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    foreach($keys as $key){
        echo "{$key} <br>";
    }

    foreach($values as $value){
        echo "{$value} <br>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>Podaj kraj</label>
    <input type="text" name="country" >
    <input type="submit">

    </form>
</body>
</html>
<?php
$capitals = array("USA" => "Washington", 
    "Japan" => "Tokio", 
    "Chinese" => "Pekin", 
    "Poland" => "Warshaw");
    $capitals["USA"] = "Las Vegas";

    $capital = $capitals[$_POST['country']];

    echo "The capital is {$capital}";

?>


