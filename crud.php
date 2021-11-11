<?php
class Crud
{
    // database connectie en tabel-naam
    private $conn;
    private $table_name = 'scheldwoorden';
    // object properties
    public $id;
    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }
    // read products
    public function read()
    {
        // select all query
        $query = 'SELECT * FROM ' . $this->table_name;
        $result = $this->conn->query($query);
        return $result;
    }

    // create products
    public function create($insertArray)
    {
        var_dump($insertArray);

        echo '<br>';

        // select all query
        $insertQuery =
            "INSERT INTO `scheldwoorden` (`woord`, `goedgekeurd`, `gradatie`) VALUES ('" .
            $insertArray['woord'] .
            "', '" .
            $insertArray['goedgekeurd'] .
            "', '" .
            $insertArray['gradatie'] .
            "');";

        echo $insertQuery;

        //exit();

        //$query = "SELECT * FROM " . $this->table_name;
        $result = $this->conn->query($insertQuery);

        var_dump($result);
        return $result;
    }
    // delete scheldwoord
    public function delete($deleteTest)
    {
        // select all query
        $queryDelete = 'DELETE FROM ' . $this->table_name . ' WHERE id = '. $deleteTest;
        $resultDelete = $this->conn->query($queryDelete);
        return $resultDelete;
    }
    // update scheldwoord
    public function update($updateArray)
    {
        // select all query
        $queryUpdate =
            "UPDATE " .
            $this->table_name .
            " SET woord = '" . $updateArray['woord'].
            "' WHERE id = " . $updateArray['id'];
            echo $queryUpdate;
            ($resultUpdate = $this->conn->query($queryUpdate));
        return $resultUpdate;
    }
}
