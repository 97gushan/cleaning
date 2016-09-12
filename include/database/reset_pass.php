<?php

    $given_mail = filter_input(INPUT_GET, "mail", FILTER_VALIDATE_EMAIL);
    /*
    $pass = "";
    for($x = 0; $x < 7; $x++){
        $rand_num = rand(0,26) + 97;
        $pass = $pass . chr($rand_num);
    }
    */

    mail("97gustavh@gmail.com", $given_mail, "Text text etxxt text tex", "From: din_son");

    header("Refresh:0; url='../../index.php'");


 ?>
