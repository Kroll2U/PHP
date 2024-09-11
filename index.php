<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x</label>
        <input type="text" name="x">
        <input type="submit" value="total">
        <label>y</label>
        <input type="text" name="y">
        <input type="submit" value="total">


    </form>
</body>
</html>


<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $total = null;
    
    $total = abs($x); // absolutna czyli -4 to 4 i 4 to 4
    $total = round($x); //zaokrąglenie 
    $total = floor($x);   //  zaokraglanie w dół
    $total = ceil($x); //podnosi do gory
    $total = pow($x, $y);   //potęgowanie
    $total = sqrt($x);
    echo $total;
?>
