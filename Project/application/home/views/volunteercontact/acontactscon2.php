        <aside class="right-side"> 
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
                                    <h3 class="box-title">Add Contact</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form action="<?php echo base_url('index.php/welcome/create_con');?>" method="post" role="form">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Contact Name</label>
                                            <input type="text" name="contactname" class="form-control" placeholder=" Enter Name"/>
                                        </div>
                                        <div class="form-group">
                                        <label>Contact Number:</label>
                                        <div class="input-group">
                                            <input type="text" name="contactnum" class="form-control" placeholder="Enter Contact Number" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="contactemail" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea name="contactaddress" class="form-control" rows="3" placeholder="Enter Address"></textarea>
                                        </div>
                                        <div class="box-footer">
                                         <?php echo validation_errors();?>     
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo base_url('index.php/welcome/vdcon2');?>'">Back</button>
                                        </div>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                </section><!-- /.content -->
                    </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        