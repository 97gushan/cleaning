<?php

    class Database{

        private $conn;
        private $db = "skurat";

        private $host = "localhost";
        private $user = "root";
        private $pass = "root";

        private function Connect(){
            # This method creates a connection to the DB
            $this->conn = new mysqli($this->host, $this->user,$this->pass,$this->db);

            if($this->conn->error){
                $error_message = $this->conn->connect_errno;

                die("Error: $error_message");
            }
        }

        private function is_mail_unique($mail){
            # This method checks if the email entered is the same as one of the
            # already registered emails->
            # unique -> return true to enable registration to happen
            # not unique -> return a error message

            $this->Connect();
            $sql = "SELECT mail FROM user";

            if($stmt = $this->conn->prepare($sql)){
                $stmt->execute();

                if($stmt->error){
                    return "Error: Could not execute SQL command";
                }

                # get the mails from the DB
                $stmt->bind_result($registered_mail);

                # create an array to store the mail adresses
                $mail_list = array();

                # add the addresses to the array
                while($stmt->fetch()){
                    array_push($mail_list, $registered_mail);
                }

                $stmt->free_result();

                $unique = true;

                # check if the emailadress is equal to one of the stored emails
                for($n = 0; $n < count($mail_list); $n++){
                    if(strcmp($mail_list[$n], $mail) == 0){
                        $unique = false;
                        break;
                    }
                }

                $stmt->close();
                $this->conn->close();

                return $unique;
            }

        }

        private function is_id_unique($persnum){
            # This method checks if the persnum entered is the same as one of the
            # already registered persnums ->
            # unique -> return true to enable registration to happen
            # not unique -> return a error message

            $this->Connect();
            $sql = "SELECT persnum FROM user";

            if($stmt = $this->conn->prepare($sql)){
                $stmt->execute();

                if($stmt->error){
                    return "Error: Could not execute SQL command";
                }

                # get the mails from the DB
                $stmt->bind_result($registered_id);

                # create an array to store the mail adresses
                $id_list = array();

                # add the addresses to the array
                while($stmt->fetch()){
                    array_push($id_list, $registered_id);
                }

                $stmt->free_result();

                $unique = true;

                # check if the emailadress is equal to one of the stored emails
                for($n = 0; $n < count($id_list); $n++){
                    if(strcmp($id_list[$n], $persnum) == 0){
                        $unique = false;
                        break;
                    }
                }

                $stmt->close();
                $this->conn->close();

                return $unique;
            }
        }

        public function register_user($name, $mail, $persnum, $pass, $salt){
            # This method takes a name, mail, personal id number, password and salt
            # and uses these to register a new user to the DB
            $unique_mail = $this->is_mail_unique($mail);
            $unique_id = $this->is_id_unique($persnum);

            # check if the mail and personal id is unique
            if($unique_mail){
                if($unique_id){
                    $this->Connect();

                    $sql = "INSERT INTO user(name, mail, pass, salt, persnum) VALUES(?,?,?,?,?)";

                    if($stmt = $this->conn->prepare($sql)){
                        $stmt->bind_param("sssss", $name, $mail, $pass, $salt, $persnum);

                        $stmt->execute();

                        if($stmt->error){
                            return "Error: Could not execute SQL command";
                        }

                        $stmt->close();
                        $this->conn->close();

                        return true;
                    }
                }else{
                    return "Personnummret är redan registrerat";
                }
            }else{
                return "Mailadressen är upptagen";
            }


        }

        public function get_user_credentials($mail){
            $this->Connect();

            $sql = "SELECT pass, salt FROM user WHERE mail=?";

            if($stmt = $this->conn->prepare($sql)){
                $stmt->bind_param("s", $mail);

                $stmt->execute();

                if($stmt->error){
                    return "Error: Could not execute SQL command";
                }

                $stmt->bind_result($pass, $salt);
                $stmt->fetch();
                $stmt->free_result();

                $stmt->close();
                $this->conn->close();

                return [$pass, $salt];

            }
        }


    }


?>
