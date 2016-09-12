<?php

    $given_mail = $_POST["mail"];
    /*
    $pass = "";
    for($x = 0; $x < 7; $x++){
        $rand_num = rand(0,26) + 97;
        $pass = $pass . chr($rand_num);
    }
    */
    # send the mail
    mail("97gustavh@gmail.com", $given_mail, "Text text etxxt text tex", "From: din_son");

    header("Refresh:0; url='../../index.php'");


 ?>
