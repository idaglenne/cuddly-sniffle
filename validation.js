function validateform() {

    var namn = document.forms["comment_form"]["inputName"].value;
    var email = document.forms["comment_form"]["inputEmail"].value;
    var comment = document.forms["comment_form"]["inputComment"].value;

    var name_error = document.getElementById("name_error");
    var email_error = document.getElementById("email_error");
    var comment_error = document.getElementById("comment_error");

    var trimmedName = namn.trim();
    var trimmedEmail = email.trim();
    var trimmedComment = comment.trim();
    var dot = ".";

    if (trimmedName == "") {
        name_error.textContent = "Du måste fylla i ditt namn!";
        return false;
    }

    if (trimmedEmail == "" || trimmedEmail.search("@") == -1 || trimmedEmail.indexOf(dot) == -1) {
        email_error.textContent = "Ogiltig mailadress!";
        return false;
    }

    else if (trimmedComment == "") {
        comment_error.textContent ="Glöm inte att skriva din kommentar!";
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