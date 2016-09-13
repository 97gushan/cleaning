<?php
    include("Database.php");

	$given_data = $_POST["data"];

    $pass = "";
    for($x = 0; $x < 7; $x++){
    	$rand_num = rand(0,26) + 97;
    	$pass = $pass . chr($rand_num);
    }

    $db = new Database();

    if($db->is_mail_unique($given_data)){

    	echo "Email does not exist";

    }else{
    	$salt = "";

    	for($x = 0; $x < 10; $x++){
        	$rand_num = rand(0,26) + 97;
        	$salt = $salt . chr($rand_num);
    	}

    	$crypt_pass = crypt($pass, $salt);

        $mail_content = ;

    	mail($given_data, "Nytt lösenord","Ditt nya lösenord är: " . $pass . ". Var vänlig byt det vid inloggning", "From: reset_pass");

    	if($db->new_pass($crypt_pass,$salt,$given_data)){
        	header("Refresh:0; url='../../index.php'");
    	}
    }
?>
