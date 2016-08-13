<?php
    include("include/static/header.php");
?>

    <div id="form">
        <form method="post" action="include/database/register_user.php">
            <input type="text" id="name" placeholder="Ange namn" />
            <input type="pass" id="pass" placeholder="Ange lösenord" />
            <input type="text" id="mail" placeholder="Ange mailadress" />
            <input type="text" id="persnum" placeholder="Ange personnummer" />

            <input type="submit" id="submit" name="submit" value="Registrera dig" />

        </form>
    </div>

<?php
    include("include/static/footer.php");
?>
