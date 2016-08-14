<?php
    include("include/static/header.php");
?>

    <div id="form">
        <form >
            <input type="text" class="text_field" id="name" placeholder="Ange namn" />
            <input type="text" class="text_field" id="mail" placeholder="Ange mailadress" />
            <input type="text" class="text_field" id="persnum" placeholder="Ange personnummer" />
            </br>
            <input type="password" class="text_field" id="pass" placeholder="Ange lösenord" />
            <input type="password" class="text_field" id="pass_2" placeholder="Ange lösenordet igen" />


            <p style="clear: left;"></p>

            <?php
                $salt = "";

                for($x = 0; $x < 10; $x++){
                    $rand_num = rand(0,26) + 97;
                    $salt = $salt . chr($rand_num);
                }
            ?>

            <input type="button" id="submit" onclick="_send_data.register_user('<?=$salt?>');" value="Registrera dig" />

        </form>
    </div>

<?php
    include("include/static/footer.php");
?>
