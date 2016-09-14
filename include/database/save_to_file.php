<?php

    $file = "../../test.csv";

    $file_content = filter_input(INPUT_GET, "file_content", FILTER_SANITIZE_STRING);

    file_put_contents($file, $file_content);

    return true;
 ?>
