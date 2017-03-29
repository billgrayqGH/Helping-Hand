<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    
<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Helping Hand - Volunteer Dashboard</title>

        
        <!-- font Awesome -->
        <link href="http://localhost/Project/designs/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://localhost/Project/designs/admin/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="http://localhost/Project/designs/admin/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="http://localhost/Project/designs/admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- daterange picker -->
        <link href="http://localhost/Project/designs/admin/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="http://localhost/Project/designs/admin/css/iCheck/all.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Color Picker -->
        <link href="http://localhost/Project/designs/admin/css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
        <!-- Bootstrap time Picker -->
        <link href="http://localhost/Project/designs/admin/css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>designs/main/assets/css/bootstrap.min.css">
        
        <!-- Main Style -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>designs/main/assets/css/main.css">

        <!-- Responsive Style -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>designs/main/assets/css/responsive.css">

        <!--Icon Fonts-->
        <link rel="stylesheet" media="screen" href="<?php echo base_url();?>designs/main/assets/fonts/font-awesome/font-awesome.min.css" />


        <!-- Extras -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>designs/main/assets/extras/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>designs/main/assets/extras/lightbox.css">


        <!-- jQuery Load -->
        <script src="<?php echo base_url();?>designs/main/assets/js/jquery-min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

      </head>

    <body data-spy="scroll" data-offset="20" data-target="#navbar">
    <!-- Nav Menu Section -->
    <div class="logo-menu">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="50">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header col-md-3">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#home"><i class="fa fa-home"></i> Helping Hand</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav col-md-9 pull-right">
                            <li class="active"><a href="#hero-area"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#services"><i class="fa fa-cogs"></i> Services</a></li>
                            <li><a href="#portfolio"><i class="fa fa-bullhorn"></i> Announcements </a></li>
                            <li><a href="#calendar"><i class="fa fa-calendar"></i> Events </a></li>
                            <li><a href="#about"><i class="fa fa-info"></i> About</a></li>
                            <li><a href="#contact"><i class="fa fa-envelope"></i> Contact</a></li>
                            </ul>
        </div>
      </div>
    </nav>
    </div>
