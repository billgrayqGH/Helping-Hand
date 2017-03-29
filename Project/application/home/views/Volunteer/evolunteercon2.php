<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Volunteer Data Table</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Volunteer Record</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form">
                                         <?php foreach($volunteer_info as $row){?> 
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" value=" <?php  echo $row['volunteerFirstname'];  ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" value="<?php  echo $row['volunteerLastname'];  ?>"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" value=" <?php     echo $row['volunteerUsername'];    ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" value=" <?php    echo $row['volunteerPassword']; ?>"/>
                                        </div>
                                         <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" value="   <?php    echo $row['volunteerAddress'];   ?>"/>
                                        </div>
                                        <div class="form-group">
                                        <label>Contact Number:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="<?php     echo $row['volunteerContact'];    ?>"/>
                                        </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" value ="   <?php  echo $row['volunteerEmail'];     ?>">
                                        </div>
                                        <?php } ?>
                                        <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/welcome/volview2');?>'">Back</button>
                                        </div>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->