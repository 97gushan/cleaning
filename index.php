<?php
    include("include/static/header.php");
?>


    <div id="form">
        <form method="post" action="login.php">
            <input type="text" placeholder="Ange användarnamn" />
            <input type="password" placeholder="Ange lösenord" />
            <input type="submit" value="Login" name="submit" />
        </form>

        <a href="register_page.php">Registrera dig</a>
    </div>



<?php
    include("include/static/footer.php");
?>
