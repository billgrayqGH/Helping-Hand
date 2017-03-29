<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Announcement Data Table</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Announcement</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form action="<?php echo base_url('index.php/welcome/update_ann');?>" method="post" role="form">
                                        <!-- text input -->
                                          <?php foreach($announcement_info as $row){?>
                                        <div class="form-group">
                                            <label>Announcement ID</label>
                                            <input type="text" name="id" class="form-control" value="<?php echo $row['announcementID']; ?>" disabled/>
                                        </div>
                                          <div class="form-group">
                                            <label>Volunteer ID</label>
                                            <input type="text" name="vid" class="form-control" value="<?php echo $row['volID']; ?>" disabled/>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control" value="<?php echo $row['announcementTitle']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" rows="3" ><?php echo $row['announcementDesc']; ?></textarea>
                                            <?php }?>
                                        </div>
                                        <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/welcome/vdann');?>'">Back</button>
                                        </div>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
