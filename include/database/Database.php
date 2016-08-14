<?php

    class Database{

        private $conn;
        private $db = "temp";

        private $host = "localhost";
        private $user = "root";
        private $pass = "root";

        private function Connect(){
            $this->conn = new mysqli($this->host, $this->user,$this->pass,$this->db);

            if($this->conn->error()){
                $error_message = $this->conn->connect_errno;

                die("Error: $error_message");
            }
        }

    }


?>
