<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  
<!DOCTYPE html>
<html class="bg-navy">
    <head>
        <meta charset="UTF-8">
        <title>Helping Hand | Log In Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url();?>designs/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url();?>designs/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url();?>designs/admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
            <!-- daterange picker -->
        <link href="<?php echo base_url();?>designs/admin/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="<?php echo base_url();?>designs/admin/css/iCheck/all.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Color Picker -->
        <link href="<?php echo base_url();?>designs/admin/css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
        <!-- Bootstrap time Picker -->
        <link href="<?php echo base_url();?>designs/admin/css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
   <body class="bg-navy">
   

        <div class="form-box" id="login-box">
            <div class="header"><b>Log In to Your Account</b></div>
              <form action="<?php echo base_url('index.php/welcome/login');?>" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                          <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                          <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>  
                        <div class="form-group">
                                            <label>User Type</label>
                                             <select class="form-control" name="position">
                                                <option>user</option>
                                                <option>admin</option>
                                                <option>leader</option>
                                            </select>
                                        </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">
                     <?php if($this->session->flashdata('login_failed')) : ?>
                     <?php echo '<p class="text-error">' .$this->session->flashdata('login_failed') . '</p>'; ?>
                     <?php endif; ?> 
                     <?php echo validation_errors();?>
                    <button type="submit" class="btn bg-olive btn-block">Log In</button>  
                   
                    
                    <a href="<?php echo base_url('index.php/welcome/reg');?>" class="text-center">Register a new volunteer</a>
                    <br>
                    <br>
                    <a href="<?php echo base_url('index.php/welcome/index');?>" class="text-center">Return to Home Page</a>
                </div>
            </form>        
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>designs/admin/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>