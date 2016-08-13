<?php
    include("include/static/header.php");
?>

    <div id="form">
        <form method="post" action="include/database/register_user.php">
            <input type="text" class="text_field" id="name" placeholder="Ange namn" />
            <input type="password" class="text_field" id="pass" placeholder="Ange lösenord" />
            <input type="text" class="text_field" id="mail" placeholder="Ange mailadress" />
            <input type="text" class="text_field" id="persnum" placeholder="Ange personnummer" />

            <p style="clear: left;">

            </p>
            <input type="submit" id="submit" name="submit" value="Registrera dig" />

        </form>
    </div>

<?php
    include("include/static/footer.php");
?>
