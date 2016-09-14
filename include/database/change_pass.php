<?php
    session_start();
    include("Database.php");

	$given_pass = $_POST["pass"];


    $db = new Database();

	$salt = "";

	for($x = 0; $x < 10; $x++){
    	$rand_num = rand(0,26) + 97;
    	$salt = $salt . chr($rand_num);
	}

	$crypt_pass = crypt($pass, $salt);


	echo $db->change_pass($crypt_pass,$salt,$_SESSION["user_id"]);


?>
