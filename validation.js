function validateform() {

    var namn = document.forms["reg_form"]["reg_name"].value;
    var email = document.forms["reg_form"]["reg_email"].value;
    var psw = document.forms["reg_form"]["reg_psw"].value;
    var confirm_psw = document.forms["reg_form"]["reg_confirmpsw"].value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var name_error = document.getElementById("name_error");
    var email_error = document.getElementById("email_error");
    var psw_error = document.getElementById("psw_error");

    var trimmedName = namn.trim();
    var trimmedEmail = email.trim();
    var trimmedPsw = psw.trim();
    var trimmedConfirmPsw = confirm_psw.trim();

    if (!filter.test(email)) {
        email_error.textContent = "Ogilitig mailadress!";
        return false;
    }

    if (trimmedName == "") {
        name_error.textContent = "Du måste fylla i ditt namn!";
        return false;
    }

   else if (trimmedPsw.length < 6) {
        psw_error.textContent ="Lösenordet måste bestå av minst 6 tecken!";
        return false;
    }

    else if (!(trimmedConfirmPsw == trimmedPsw)){

        psw_error.textContent ="Lösenorden matchar inte!";
        return false;

    }


}


function validate_reg_form() {

    var email = document.forms["reg_form"]["inputRegEmail"].value;
    var psw = document.forms["reg_form"]["inputRegPsw"].value;
    
    var trimmedEmail = email.trim();
    var trimmedPsw = psw.trim();
    var dot = ".";

    var email_error = document.getElementById("email_error");
    var psw_error = document.getElementById("psw_error");


    if (trimmedEmail == "" || trimmedEmail.search("@") == -1 || trimmedEmail.indexOf(dot) == -1) {
        email_error.textContent = "Ogiltig mailadress!";
        return false;
    }

    else if (trimmedPsw.length < 6) {
        psw_error.textContent ="Lösenordet måste bestå av minst 6 tecken!";
        return false;
    }

}
