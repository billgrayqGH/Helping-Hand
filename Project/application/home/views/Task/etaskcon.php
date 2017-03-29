        <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Task Data Table</li>
                    </ol>
                </section>

                    <section class="content">
                        <!-- right column -->
                        <div class="col-md-6">
                            <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Task</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Task Name</label>
                                            <input type="text" class="form-control" placeholder=" Enter Name"/>
                                        </div>
                                        
                                         <div class="form-group">
                                         <div class="input-group">
                                            <label>Date:</label>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                    
                                       <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                            <label>Time:</label>
                                            <div class="input-group">                                            
                                                <input type="text" class="form-control timepicker"/>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                       </div>
                                      
                                        <div class="form-group">
                                            <label>Location</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter Address"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter Address"></textarea>
                                        </div>
                                        <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/welcome/vdtask');?>'">Back</button>
                                        </div>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                </section><!-- /.content-->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
