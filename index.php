<?php
    include("include/static/header.php");
?>
    <!-- TODO check if the user is logged in, if yes then display the
        ratin page-->

    <div id="form">
        <form method="post" action="login.php">
            <input type="text" id="mail" placeholder="Ange mailadress" />
            <input type="password" id="pass" placeholder="Ange lösenord" />
            <input type="button" onclick="_send_data.login_user();" />
        </form>

        <a href="register_page.php">Registrera dig</a>
    </div>



<?php
    include("include/static/footer.php");
?>
