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
                                if(msg == 0){
                                     $("#signup-errors").html("All fields are mandatory!");
                                     $("#signup-errors").removeClass("hide").addClass("show");
                                }else if(msg == 'already_exist'){
                                      $("#signup-errors").html("Email already registered! Click <a href='forgot-password'>Forgot password</a> to generate a new password..");
                                      $("#signup-errors").removeClass("hide").addClass("show");
                                }else{
                                    //redirect the user to dashboard
                                }
                            },
                            error: function(xhr, status) {
                                alert("There was some issue signing up! Please try again after some time.");
                                return false;
                            }
                        });
             }   
        });
        
    });


    $("#login_submit").click(function(e){  

        e.preventDefault();  
        var validate = $.when(validate_login());
        validate.done(function(data){
                if(data){ 
                return false;
            }else{ 
                var login_data = $('#login').serialize();

                $.ajax({
                            type: "POST",
                            url: "login/",
                            data: login_data,
                            success: function(msg) {
                                if(msg == 0){
                                     $("#login-errors").html("All fields are mandatory!");
                                     $("#login-errors").removeClass("hide").addClass("show");
                                }else{
                                    //redirect the user to dashboard
                                }
                            },
                            error: function(xhr, status) {
                                alert("There was some issue logging in! Please try again after some time.");
                                return false;
                            }
                        });
             }   
        });
        
    });
});

var validate_signup = function() { alert("singup");
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

    if(!$('#agreement').is(':checked')){
        error=1;
        error_report += "Please accept the license agreement";
        $("#accept-agreement").addClass('has-error');
    }else{
        $("#accept-agreement").removeClass('has-error');
    }
    if(error){
        $("#signup-errors").html(error_report);
        $("#signup-errors").removeClass("hide").addClass("show");
    }

    return error;

}

var validate_login = function() {
    var error=0;
    var error_report='';
    $("#login-errors").html();
    if(!$("#login_email").val()){
        error=1;
        error_report += "Please enter email address <br>";
        $("#inputlogin-email").addClass("has-error");
    }else if(validateEmail($("#login_email").val()) == false){
        error=1;
        error_report += "Please enter correct email address <br>";
        $("#inputlogin-email").addClass("has-error");
    }else{
        $("#inputlogin-email").removeClass("has-error");
    }

    if(!$("#login_pass").val()){
        error=1;
        error_report += "Please enter password <br>";
        $("#inputlogin-pass").addClass("has-error");
    }else{
        $("#inputlogin-pass").removeClass("has-error");
    }
     if(error){
        $("#login-errors").html(error_report);
        $("#login-errors").removeClass("hide").addClass("show");
    }

    return error;
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