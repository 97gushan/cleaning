<?php
    session_start();

    $file = "../../files/16_".$_SESSION["month"]."/16_".$_SESSION["month"]."_".$_SESSION["name"] . ".csv";

    $file_content = filter_input(INPUT_GET, "file_text", FILTER_SANITIZE_STRING);

    file_put_contents($file, $file_content);

    echo true;
 ?>
