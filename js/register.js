

function validate(){

    var emailID = document.myform.email.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");

    if (atpos < 1 || ( dotpos - atpos < 2 )) {
            $('#email_err').html('Invalid email');
            document.myform.email.focus() ;
            return false;
    }
    else{
        $('#email_err').html('valid');
        document.myform.email.focus() ;
    }

    if(document.myform.password.value!=document.myform.cnfmpassword.value){
            $('#cnfmpassword_err').html('confirm password not matching');
            document.myform.cnfmpassword.focus() ;
            return false;
    }
    else{
        $('#cnfmpassword_err').html('matching');
        document.myform.cnfmpassword.focus() ;
    }
    
}
