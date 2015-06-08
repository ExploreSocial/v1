$(document).ready(function(){
    

    $("#signup_submit").click(function(e){ 
        e.preventDefault();
        var validate = $.when(validate_signup());
        validate.done(function(data){
                if(data){
                return false;
            }else{
                var signup_data = $('#signup').serialize();

                $.ajax({
                            type: "POST",
                            url: "signup/",
                            data: signup_data,
                            success: function(msg) {
                                     
                            },
                            error: function(xhr, status) {
                                alert("There was some issue signing up! Please try again after some time.");
                                return false;
                            }
                        });
             }   
        });
        
    });
});

var validate_signup = function() {
    var error=0;
    var error_report='';
    $("#signup-errors").html();

    if(!$("#username").val()  ){
        error=1;
        error_report += "Please enter username <br>";
        $("#input-username").addClass("has-error");
    }else{
        $("#input-username").removeClass("has-error");
    }
    if(!$("#email").val()){
        error=1;
        error_report += "Please enter email address <br>";
        $("#input-email").addClass("has-error");
    }else if(validateEmail($("#email").val()) == false){
        error=1;
        error_report += "Please enter correct email address <br>";
        $("#input-email").addClass("has-error");
    }else{
        $("#input-email").removeClass("has-error");
    }
    if(!$("#pass").val()){
        error=1;
        error_report += "Please enter password <br>";
        $("#input-pass").addClass("has-error");
    }else if(!$("#re-pass").val()){
        error=1;
        error_report += "Please confirm your password <br>";
        $("#input-repass").addClass("has-error");
        $("#input-pass").removeClass("has-error");
    }else if($("#re-pass").val() != $("#pass").val()){
        error=1;
        error_report += "Passwords don't match";
        $("#input-repass").addClass("has-error");
        $("#re-pass").val("");

    }else{
        $("#input-repass").removeClass("has-error");
        $("#input-pass").removeClass("has-error");
    }
    if(error){
        $("#signup-errors").html(error_report);
        $("#signup-errors").removeClass("hide").addClass("show");
    }

    return error;

}

var validate_login = function(x,y) {
     return (x * y);
}

function validateEmail(email){
    var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    var valid = emailReg.test(email);

    if(!valid) {
        return false;
    } else {
        return true;
    }
}