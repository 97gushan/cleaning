<?php

    require "Z:\Program\MAMP\libs\PHPMailer\PHPMailerAutoload.php";

    $given_mail = filter_input(INPUT_GET, "mail", FILTER_VALIDATE_EMAIL);

    $pass = "";
    for($x = 0; $x < 7; $x++){
        $rand_num = rand(0,26) + 97;
        $pass = $pass . chr($rand_num);
    }

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";


    #mail($mail, "Glömt lösenord", $pass, "From: Testing");

    #header("Refresh:0; url='../../index.php'");


 ?>
