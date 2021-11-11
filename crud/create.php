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
$conn = $database->getConnection();
// initialize object
$product = new Crud($conn);
// create product here
// query products
echo '<pre>';
var_dump($_POST);

$insertArray = $_POST;

if (isset($_POST['woord'])) {
    $result = $product->create($insertArray);
}
?>

<form action="create.php" method="post">
    <input type="text" name="woord" id="naam" placeholder="Scheldwoorden">
    <input type="text" name="goedgekeurd" id="beschrijving" placeholder="Goedgekeurd ja/nee">
    <input type="number" name="gradatie" id="prijs" placeholder="gradatie">
    <input type="submit" value="Verzenden">
</form>