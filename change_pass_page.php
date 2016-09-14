<?php
    session_start();

    include("include/static/header");
?>

    <form>
        <input type="password" id="pass" placeholder="Ange lösenord" />
        <input type="password" id="pass2" placeholder="Ange lösenord igen" />

        <input type="button" name="submit" value="Byt lösenord" onclick="_send_data.change_pass();" />
    </form>

<?php
    include("include/static/footer");
 ?>
