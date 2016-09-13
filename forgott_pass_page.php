<?php
    include("include/static/header.php");
?>

    <div id="form">
        <form action="include/database/reset_pass.php" method="post">

            <input type="text" name="data" id="mail" placeholder="Ange email" />
            <input type="submit" value="Submit"/>

        </form>
    </div>

<?php
    include("include/static/footer.php");
?>
