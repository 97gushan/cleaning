<?php
    include("Database.php");

    $given_mail = $_POST["mail"];

    $pass = "";
    for($x = 0; $x < 7; $x++){
        $rand_num = rand(0,26) + 97;
        $pass = $pass . chr($rand_num);
    }

    $db = new Database();

    if($db->is_mail_unique($given_mail)){
        # send the mail

        $salt = "";

        for($x = 0; $x < 10; $x++){
            $rand_num = rand(0,26) + 97;
            $salt = $salt . chr($rand_num);
        }

        $crypt_pass = crypt($pass, $salt);

        mail($given_mail, "Nytt lösenord", $pass, "From: reset_pass");

        if($db->new_pass($crypt_pass,$salt,$given_mail)){
            header("Refresh:0; url='../../index.php'");
        }

    }


 ?>
