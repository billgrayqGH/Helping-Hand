<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Event Data Table</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Events</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form action="<?php echo base_url('index.php/welcome/update_eve');?>" method="post" role="form">
                                        <!-- text input -->
                                         <?php foreach($event_info as $row){?>
                                         <div class="form-group">
                                            <label>Event ID</label>
                                            <input type="text" name="id" class="form-control" value="<?php echo $row['eventID']; ?>" disabled/>
                                        </div>
                                          <div class="form-group">
                                            <label>Volunteer ID</label>
                                            <input type="text" name="vid" class="form-control" value="<?php echo $row['volID']; ?>" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Event Name</label>
                                            <input type="text" name="name" class="form-control" value="<?php echo $row['eventName']; ?>"/>
                                        </div>
                                        
                                         <div class="form-group">
                                         <div class="input-group">
                                            <label>Date:</label>
                                            <input type="text" name="date" class="form-control" value="<?php echo $row['eventDate']; ?>"/>
                                        </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                        
                                        <div class="form-group">
                                            <label>Time:</label>
                                            <div class="input-group">                                            
                                                <input type="text" name="time" value="<?php echo $row['eventTime']; ?>"/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
         
                                      
                                        <div class="form-group">
                                            <label>Location</label>
                                            <textarea name="location" class="form-control" rows="3" ><?php echo $row['eventLocation']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" rows="3" ><?php echo $row['eventDescription']; ?></textarea>
                                          <?php }?>
                                        </div>
                                        <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/welcome/vdeve');?>'">Back</button>
                                        </div>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        
                        
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->