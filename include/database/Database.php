<?php

    class Database{

        private $conn;
        private $db = "skurat";

        private $host = "localhost";
        private $user = "root";
        private $pass = "root";

        private function Connect(){
            $this->conn = new mysqli($this->host, $this->user,$this->pass,$this->db);

            if($this->conn->error){
                $error_message = $this->conn->connect_errno;

                die("Error: $error_message");
            }
        }

        public function register_user($name, $mail, $persnum, $pass, $salt){

            $this->Connect();

            $sql = "INSERT INTO user(name, mail, pass, salt, persnum) VALUES(?,?,?,?,?)";

            if($stmt = $this->conn->prepare($sql)){
                $stmt->bind_param("sssss", $name, $mail, $pass, $salt, $persnum);

                $stmt->execute();

                if($stmt->error){
                    return false;
                }

                $stmt->close();
                $this->conn->close();

                return true;
            }
        }

    }


?>
