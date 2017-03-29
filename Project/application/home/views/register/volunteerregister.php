<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  
<!DOCTYPE html>
<html class="bg-navy">
    <head>
        <meta charset="UTF-8">
        <title>Helping Hand | Registration Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url();?>designs/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url();?>designs/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://f5team47.gblearn.com/Project/designs/admin/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="http://f5team47.gblearn.com/Project/designs/admin/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="http://f5team47.gblearn.com/Project/designs/admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- daterange picker -->
        <link href="http://f5team47.gblearn.com/Project/designs/admin/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- iCheck for checkboxes and radio inputs -->
        <link href="http://f5team47.gblearn.com/Project/designs/admin/css/iCheck/all.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Color Picker -->
        <link href="http://f5team47.gblearn.com/Project/designs/admin/css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet"/>
        <!-- Bootstrap time Picker -->
        <link href="http://f5team47.gblearn.com/Project/designs/admin/css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-navy">

        <div class="form-box" id="login-box">
            <div class="header"><b>Register as a New Volunteer</b></div>
              <form action="<?php echo base_url('index.php/welcome/signup');?>" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                          <label>First name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="First name"/>
                    </div>
                    <div class="form-group">
                         <label>Last name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Last name"/>
                    </div>
                    <div class="form-group">
                         <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Address"/>
                    </div>
                     <div class="form-group">
                          <label>Email Address</label>
                        <input type="text" name="email" class="form-control" placeholder="Email Address"/>
                    </div>
                     <div class="form-group">
                       <label>Contact Number</label>
                     <div class="input-group">
                     <input type="text" class="form-control" name="contactno" placeholder="Enter Contact Number" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                              </div><!-- /.input group -->
                     </div><!-- /.form group -->
                   
                     <hr>
                    <h3> Account Information </h3>
                   
                    <div class="form-group">
                         <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                         <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                         <label>Confirm Password</label>
                        <input type="password" name="password2" class="form-control" placeholder="Retype password"/>
                    </div>
                </div>
                <div class="footer">                    
                      <?php echo validation_errors();?>
                    <button type="submit" class="btn bg-olive btn-block">Sign me up</button>
                    <a href="<?php echo base_url('index.php/welcome/signin');?>" class="text-center">I already have a volunteer account</a>
                    <br>
                    <br>
                    <a href="<?php echo base_url('index.php/welcome/index');?>" class="text-center">Return to Home Page</a>
                </div>
            </form>
                  
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <!-- Bootstrap -->
        <script src="http://f5team47.gblearn.com/Project/designs/admin/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="http://f5team47.gblearn.com/Project/designs/admin/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="http://f5team47.gblearn.com/Project/designs/admin/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="http://f5team47.gblearn.com/Project/designs/admin/js/AdminLTE/app.js" type="text/javascript"></script>
         <!-- InputMask -->
        <script src="http://f5team47.gblearn.com/Project/designs/admin/js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="http://f5team47.gblearn.com/Project/designs/admin/js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="http://f5team47.gblearn.com/Project/designs/admin/js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <!-- date-range-picker -->
        <script src="http://f5team47.gblearn.com/Project/designs/admin/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- bootstrap color picker -->
        <script src="http://f5team47.gblearn.com/Project/designs/admin/js/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
        <!-- bootstrap time picker -->
        <script src="http://f5team47.gblearn.com/Project/designs/admin/js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
         <!-- Page script -->
        <script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();

                //Date range picker
                $('#reservation').daterangepicker();
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
                //Date range as a button
                $('#daterange-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'Last 7 Days': [moment().subtract('days', 6), moment()],
                                'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
                );

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-red',
                    radioClass: 'iradio_flat-red'
                });

                //Colorpicker
                $(".my-colorpicker1").colorpicker();
                //color picker with addon
                $(".my-colorpicker2").colorpicker();

                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });
            });
        </script>


    </body>
</html>


