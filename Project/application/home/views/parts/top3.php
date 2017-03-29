<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Helping Hand | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="http://localhost/Project/designs/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
         <!-- fullCalendar -->
        <link href="http://localhost/Project/designs/admin/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <link href="http://localhost/Project/designs/admin/css/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
              Helping Hand
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                   
                        <!-- Notifications: style can be found in dropdown.less -->
                       
                        <!-- Tasks: style can be found in dropdown.less -->
                      
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>
                                      <?php
                                             $id = $this->session->userdata('userid');
                                             $fn = $this->session->userdata('fname');
                                             $ln = $this->session->userdata('lname');
                                             echo $id.' '.$fn.' '. $ln; ?>
                                    <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                            
                                <!-- Menu Body -->
                              
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="http://localhost/Project/index.php/welcome/logout" class="btn btn-default btn-flat">Log out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
       
