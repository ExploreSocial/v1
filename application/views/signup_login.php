<!-- <!DOCTYPE html> -->
    <!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
  <!--  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Explore Social</title>
        
     
        <link href="vendors/animate-css/animate.min.css" rel="stylesheet">
        <link href="vendors/sweet-alert/sweet-alert.min.css" rel="stylesheet">
        <link href="vendors/material-icons/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="vendors/socicon/socicon.min.css" rel="stylesheet">
            
       
        <link href="css/app.min.1.css" rel="stylesheet">
        <link href="css/app.min.2.css" rel="stylesheet">


    </head> -->
<?php    $this->load->view("admin_header"); ?>
    <body class="login-content">
        <!-- Login -->

        <div class="lc-block <?php if($action == "login") echo "toggled"; ?>" id="l-login">
          <form id="login" method="post" action="#"> 
            <div class="alert alert-danger hide" role="alert" id="login-errors"></div>
            <div class="input-group m-b-20" id="inputlogin-email">
                <span class="input-group-addon"><i class="md md-person"></i></span>
                <div class="fg-line">
                    <input type="email" id="login_email" name="email" class="form-control" placeholder="Email Address">
                </div>
            </div>
            
            <div class="input-group m-b-20" id="inputlogin-pass">
                <span class="input-group-addon"><i class="md md-accessibility"></i></span>
                <div class="fg-line">
                    <input type="password" id="login_pass" name="pass" class="form-control" placeholder="Password">
                </div>
            </div>
            <input type="hidden" name="login_now" value="1" >
            <div class="clearfix"></div>
            
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    <i class="input-helper"></i>
                    Keep me signed in
                </label>
            </div>
            
            <a href="" class="btn btn-login btn-danger btn-float" id="login_submit"><i class="md md-arrow-forward"></i></a>
          </form>
            <ul class="login-navigation">
                <li data-block="#l-register" class="bgm-red">Register</li>
                <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
            </ul>
        </div>
        
        <!-- Register -->
        <div class="lc-block <?php if($action == "signup") echo "toggled"; ?>" id="l-register">
          <form id="signup" method="post" action="#">  
            
            <div class="alert alert-danger hide" role="alert" id="signup-errors"></div>
            
            <div class="input-group m-b-20" id="input-username">
                <span class="input-group-addon"><i class="md md-person"></i></span>
                <div class="fg-line">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                </div>
            </div>
            
            <div class="input-group m-b-20" id="input-email">
                <span class="input-group-addon"><i class="md md-mail"></i></span>
                <div class="fg-line">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
                </div>
            </div>
            
            <div class="input-group m-b-20" id="input-pass">
                <span class="input-group-addon"><i class="md md-accessibility"></i></span>
                <div class="fg-line">
                    <input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
                </div>
            </div>
            
              <div class="input-group m-b-20" id="input-repass">
                <span class="input-group-addon"><i class="md md-accessibility"></i></span>
                <div class="fg-line">
                    <input type="password" id="re-pass" class="form-control" placeholder="Confirm Password">

                </div>
                
            </div>
            

            <div class="clearfix"></div>
            
            <div class="checkbox" id="accept-agreement">
                <label>
                    <input type="checkbox" value="" name="agreement" id="agreement">
                    <i class="input-helper"></i>
                    Accept the license agreement
                </label>
            </div>
            <input type="hidden" name="signup_now" value="1" >
            <a href="" class="btn btn-login btn-danger btn-float" id="signup_submit"><i class="md md-arrow-forward"></i></a>
        </form>
            <ul class="login-navigation">
                <li data-block="#l-login" class="bgm-green">Login</li>
                <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
            </ul>
        </div>
        
        <!-- Forgot Password -->
        <div class="lc-block" id="l-forget-password">
            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>
            
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="md md-email"></i></span>
                <div class="fg-line">
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
            </div>
            
            <a href="" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></a>
            
            <ul class="login-navigation">
                <li data-block="#l-login" class="bgm-green">Login</li>
                <li data-block="#l-register" class="bgm-red">Register</li>
            </ul>
        </div>
        
        
    </body>

    <?php $this->load->view("admin_footer"); ?>