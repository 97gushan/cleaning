var _send_data = {
    register_user : function(text){

        var params = {
            name : $.trim($("#name").val()),
            pass : $.trim($("#pass").val()),
            mail : $.trim($("#mail").val()),
            persnum : $.trim($("#persnum").val()),
            salt : text
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
            var emailReg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

            if(!emailReg.test(params["mail"])){
                error_message += "Felaktig mailadress \n";
                can_registration_happen = false;
            }else{
                if(params["pass"] != pass_2){
                    error_message += "Lösenorden stämer inte överens";
                    can_registration_happen = false;
                }
            }
        }




        if(!can_registration_happen){
            alert(error_message);
        }

    }

};
