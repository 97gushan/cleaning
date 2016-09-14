<h2>hej</h2>

<form method="post" action="../include/database/logout_user.php">
    <input type="submit" name="submit" value="Logga ut" />
</form>

<a href=" change_pass_page.php">Byt lösenord</a>


<form>
<?php
    for($x = 0; $x<10; $x++){
        echo "<input type='text' id='text$x' placeholder='Wub'/>
              <input type='text' id='text$x' placeholder='Hub'/>";
    }
?>
</form>
