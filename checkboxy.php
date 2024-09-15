<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza"> Pizza <br>
    <input type="checkbox" name="foods[]" value="Burger"> Burger <br>
    <input type="checkbox" name ="foods[]" value="Taco"> Taco <br>
    <input type="submit" name="submit" value="confirm">
    </form>
</body>
</html>



<?php
if(isset($_POST["submit"])) {
    // Check if 'foods' array is set before accessing it
    if(isset($_POST["foods"])) {
        $foods = $_POST["foods"];
        foreach($foods as $food) {
            echo $food . "<br>";
        }
    } else {
        // Message to display if no checkboxes were selected
        echo "Please select at least one food item.";
    }
}
?>


