<?php
    class Database{
        private $servername = "localhost";
        private $username = "root";
        private $password = "root";
        private $database = "RIDE";
        public $conn;

        // CONSTRUCTOR - a method that is automatically called when an object is created
        public function __construct(){
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

            if($this->conn->connect_error){
                die("Connection errors : " . $this->conn->connect_error);
            }

            return $this->conn;
        }
    }


?>