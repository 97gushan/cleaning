<h2>hej</h2>

<form method="post" action="../include/database/logout_user.php">
    <input type="submit" name="submit" value="Logga ut" />
</form>

<a href=" change_pass_page.php">Byt lösenord</a>


<form>
<?php
    $month_length = array("jan" => 31, "feb" => 28, "okt" => 31); #<-- TODO fill upp the whole list with months
    $month = "okt";
    $length = $month_length[$month];
    $_SESSION["month"] = $month;

    for($x = 0; $x<$length; $x++){
        echo "<input type='text' id='text_$x' placeholder='Wub'/>
              <input type='text' id='text2_$x' placeholder='Hub'/>";
    }
?>
    <input type="button" onclick="_send_data.save_timestamp(<?=$length?>);" />
</form>
