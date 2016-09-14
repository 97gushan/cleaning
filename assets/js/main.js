var _send_data = {
    register_user : function(text){

        var params = {
            name : $.trim($("#name").val()),
            pass : $.trim($("#pass").val()),
            mail : $.trim($("#mail").val()),
            persnum : $.trim($("#persnum").val()),
            salt : $.trim(text)
        };

        // Get the second password
        pass_2 = $.trim($("#pass_2").val());


        error_message = "";
        can_registration_happen = true;


        // check so the fields are not empty
        if(params["name"] == "" ||
           params["pass"] == "" ||
           params["persnum"] == "" ||
           pass_2 == ""||
           params["mail"] == ""){
               error_message += "Alla fält är ej ifyllda \n";

               can_registration_happen = false;

        }else{
            // check if the mail is valid
            var emailReg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

            if(!emailReg.test(params["mail"])){
                error_message += "Detta är ej en fungerande mailadress \n";
                can_registration_happen = false;
            }else{
                // Check if the passwords match
                if(params["pass"] != pass_2){
                    error_message += "Lösenorden stämer inte överens";
                    can_registration_happen = false;
                }
            }
        }

        // have an error occured?? if yes, show an error message
        if(!can_registration_happen){
            alert(error_message);
        }else{
            // Call  register_user.php and register the user
            $.get("include/database/register_user.php", params, function(data){
                if(data == 1){
                    alert("Registrering lyckades!");
                    window.location.assign("index.php");
                }else if(data == 0){
                    alert("Registrering misslyckades");
                }else{
                    alert(data);
                }
            });
        }

    },

    login_user : function(salt){
        var params = {
            mail : $.trim($("#mail").val()),
            pass : $.trim($("#pass").val())
        };

        $.get("include/database/login_user.php", params, function(data){
            if(data == 1){
                alert("Inloggning lyckades");
                window.location.assign("index.php");

            }else if(data == 0){
                alert("Emailadress och lösenord stämmer inte överens");
            }else{
                alert(data);
            }
        });
    },


    change_pass : function(){
        var params = {
            pass1 : $.trim($("#pass").val()),
            pass2 : $.trim($("#pass2").val())
        };

        if(params["pass1"] === params["pass2"]){
            $.get("include/database/change_pass.php", params, function(data){
                if(data == 1){
                    alert("Lösenord är bytt");
                    window.location.assign("index.php");

                }else if(data == 0){
                    alert("Lösenord kunde inte bytas");
                }else{
                    alert(data);
                }
            });
        }
    },

    save_timestamp : function(length){
        var params = {};

        for(var x = 0; x < length; x++){
            params.push({$("#text_"+ x.toString()).val(), $("#text2_"+ x.toString()).val()});
        }
    }
};
