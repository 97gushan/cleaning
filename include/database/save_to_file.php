<?php

    $file = "../../test.csv";

    $file_content = filter_input(INPUT_GET);

    file_put_contents($file, $file_content);

 ?>
