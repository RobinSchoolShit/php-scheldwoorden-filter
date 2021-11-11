<?php
class Filter{
    private $conn;
    public function __construct($db){
        $this->conn = $db;
    }
    public function scheldwoordenfilter($inputText, $gradatie){
        $sql = 'SELECT woord, gradatie FROM scheldwoorden WHERE goedgekeurd="ja"';

        $result = $this->conn->query($sql);

            $text_to_filter = $inputText;

            $array_to_filter = explode(' ', $text_to_filter);

            for ($count = 0; $count < count($array_to_filter); $count++) {
                // echo $count;
                $result = $this->conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // echo $row['woord'];
                        if ($gradatie == $row['gradatie']) {

                            $array_to_filter[$count] = str_replace(
                                $row['woord'],
                                "*",
                                $array_to_filter[$count]
                            );
                        }
                    }
                }
            }

            $text_to_filter = implode(' ', $array_to_filter);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo $row['woord'] . '<br>';
                }
            } else {
                echo 'Niks in de database';
            }

        return $text_to_filter;
    }
}