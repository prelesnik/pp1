<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include "functions.php";

    $numbers = array(7,9,8,9,8,8,6);

    function printArray($numbers)
    {
        echo "<p>" . implode($numbers, ", ") . "</p>";
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
        printArray($numbers);
        echo "<p>" . largest($numbers) . "</p>";
        echo "<p>" . average($numbers) . "</p>";
        printArray(removeDups($numbers));
        print_r(distribution($numbers));
    ?>
</body>
</html>