<!-- UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition; -->

<?php
// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// database connection will be here
// include database and object files
include_once '../conn/connect.php';
include_once '../crud.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$product = new Crud($db);
// create product here
// query products
var_dump($_POST);

$updateArray = $_POST;

$result = $product->update($updateArray);

echo $result;
?>

<form action="update.php" method="post">
    <input type="number" name="id" id="id" placeholder="id">
    <input type="text" name="woord" id="woord" placeholder="scheldwoord">
    <input type="submit" value="submit">
</form>