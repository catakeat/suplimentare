<?php
$connect = new DbConnection();
//echo $connect;
$conn = $connect->conn;
if ($conn) {
    // exit();
} else {
    echo "No connection.Is going to exit now";
    exit();
}

class DbConnection {

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'suplimentare';
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}

?>
