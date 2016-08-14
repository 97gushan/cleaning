
<?php

    $name = filter_input(INPUT_GET, "name", FILTER_SANITIZE_STRING);
    $mail = filter_input(INPUT_GET, "mail", FILTER_SANITIZE_STRING);
    $persnum = filter_input(INPUT_GET, "persnum", FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_GET, "pass", FILTER_SANITIZE_STRING);
    $salt = filter_input(INPUT_GET, "salt", FILTER_SANITIZE_STRING);

    $crypted_pass = crypt($pass, $salt);


?>
