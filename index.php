<?php

require 'conn/connect.php';

require 'filter.php';

$db = new Database();

$conn = $db->getConnection();

$filter = new Filter($conn);

if (isset($_POST['text'])) {
    echo $filter->scheldwoordenfilter($_POST['text'], $_POST['gradatie']);
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Scheldwoorden Filter</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="text" id="text">
        <select name="gradatie" id="gradatie">
            <option value="1">Gradatie 1</option>
            <option value="2">Gradatie 2</option>
            <option value="3">Gradatie 3</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
