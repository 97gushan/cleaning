<?php
    session_start();

    include("include/static/header.php");
?>
    <!-- TODO check if the user is logged in, if yes then display the
        ratin page-->

<?php
    if(isset($_SESSION["login"])){
        if($_SESSION["login"] == "USER"){
            include("include/views/rating_page.php");
        }
    }else{
        include("include/views/login_page.php");
    }



    include("include/static/footer.php");
?>
