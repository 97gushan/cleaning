<?php
    session_start();


    include("Database.php");

    $mail = filter_input(INPUT_GET, "mail", FILTER_VALIDATE_EMAIL);
    $pass = filter_input(INPUT_GET, "pass", FILTER_SANITIZE_STRING);

    $db = new Database();

    $saved_data = $db->get_user_credentials($mail);

    $saved_pass = $saved_data[0];
    $salt = $saved_data[1];

    $crypted_pass = crypt($pass, $salt);

    if(strcmp($crypted_pass, $saved_pass) == 0){
        $_SESSION["login"] = "USER";
        $_SESSION["user_id"] = $saved_data[2];
        $_SESSION["name"] = $saved_data[3];
        echo true;
    }else{
        echo false;
    }

?>
