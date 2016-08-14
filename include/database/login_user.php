<?php

    include("Database.php");

    $mail = filter_input(INPUT_GET, "mail", FILTER_VALIDATE_EMAIL);
    $pass = filter_input(INPUT_GET, "pass", FILTER_SANITIZE_STRING);

    $db = new Database();

    $saved_data = $db->get_user_credentials($mail);

    $saved_pass = $saved_data[0];
    $salt = $saved_data[1];

    $crypted_pass = crypt($pass, $salt);

    if(strcmp($crypted_pass, $saved_pass) == 0){
        # TODO save to session
        echo true;
    }else{
        echo false;
    }

?>
