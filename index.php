<?php
    include "functions.php";

    $numbers = array(7,9,8,9,8,8,6);

    function printArray($numbers)
    {
        echo "<p>$numbers</p>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PP1</title>
</head>
<body>
    <h1>Pair Programming Assignment 1</h1>
    <?php
        echo implode($numbers, ", ");
        echo "<br>";
        echo largest($numbers);
        echo "<br>";
        echo average($numbers);
    ?>
</body>
</html>