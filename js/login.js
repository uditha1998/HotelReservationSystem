function validateLogin(){

    var emailID = document.loginform.email.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");

    if (atpos < 1 || ( dotpos - atpos < 2 )) {
            $('#email_err').html('Invalid email');
            document.loginform.email.focus() ;
            return false;
    }
}