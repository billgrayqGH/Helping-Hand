        <aside class="right-side"> 
             <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> 
                        <li class="active">Volunteer Profile</li>
                    </ol>
                </section>
            <!-- Main content -->
                <section class="content">
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Volunteer Profile</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                        
                                         <?php foreach($volunteer_info as $row){?>  
                                         <div class="form-group">
                                            <label>Volunteer ID :</label>
                                          <?php  echo $row['volunteerID'];  ?>
                                        </div>
                                         <div class="form-group">
                                            <label>First Name :</label>
                                          <?php  echo $row['volunteerFirstname'];  ?>
                                        </div>
                                         <div class="form-group">
                                            <label>Last Name :</label>
                                          <?php  echo $row['volunteerLastname'];  ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Address :</label>
                                           <?php    echo $row['volunteerAddress'];   ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Number :</label>
                                          <?php     echo $row['volunteerContact'];    ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address :</label>
                                         <?php  echo $row['volunteerEmail'];     ?>
                                        </div>
                                          <div class="form-group">
                                            <label>Username :</label>
                                       <?php     echo $row['volunteerUsername'];    ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Password :</label>
                                        <?php    echo $row['volunteerPassword']; ?>
                                        </div>
                                         
                                         <?php }?>

                                       
                                        <div class="box-footer">
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/welcome/evol2');echo '/'.$row['volunteerID'];?>'">Edit Profile</button>
                                        </div>
                                
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                </section><!-- /.content -->
                    </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->