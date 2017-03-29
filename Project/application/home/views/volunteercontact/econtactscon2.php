<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Contacts Data Table</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Contact</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form">
                                          <?php foreach($contact_info as $row){?> 
                                        <!-- text input -->
                                         <div class="form-group">
                                            <label>Contact ID</label>
                                            <input type="text" name="id" class="form-control" value="<?php echo $row['contactID']; ?>" disabled/>
                                        </div>
                                          <div class="form-group">
                                            <label>Volunteer ID</label>
                                            <input type="text" name="vid" class="form-control" value="<?php echo $row['volID']; ?>" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Name</label>
                                            <input type="text" class="form-control" value="<?php echo $row['contactName']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                        <label>Contact Number:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="<?php echo $row['contactNumber']; ?>"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $row['contactEmail']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="3" ><?php echo $row['contactAddress']; ?></textarea>
                                        </div>
                                        <div class="box-footer">
                                          <?php } ?>
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/welcome/vdcon2');?>'">Back</button>
                                        </div>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->