<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass ="";
$dbname= "parkingsystem";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

class db {
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass ="";
    private $dbname= "parkingsystem";
    public function connect(){
        $conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
        return $conn;

    }
}
?>