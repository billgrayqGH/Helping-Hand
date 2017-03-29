  <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                     <h4>
                          <a href="<?php echo base_url('index.php/welcome/chat2');?>"><i class="fa fa-envelope"></i> Email</a>
                      
                    </h4>
                </section>

                <!-- Main content -->
               <!-- quick email widget -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Quick Email</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div><!-- /. tools -->
                                </div>
                                <div class="box-body">
                                    <form action="<?php echo base_url('index.php/welcome/send');?>" method="post">
                                        <?php echo '<p class="text-error">' .$this->session->flashdata('sent') . '</p>'; ?>
                                        <div class="form-group">
                                            <label>Sender Name</label>
                                            <input type="text" name="name" class="form-control" placeholder=" Enter Name"/>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1"> Sender Email address</label>
                                            <input type="email" name="email1" class="form-control" id="exampleInputEmail1" placeholder="Enter Sender Email">
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1"> Recipient Email address</label>
                                            <input type="email" name="email2" class="form-control" id="exampleInputEmail1" placeholder="Enter Recipient Email">
                                        </div>
                                        <div class="form-group">
                                              <label for="subject">Subject</label>
                                            <input type="text" name="subject" class="form-control" name="subject" placeholder="Subject"/>
                                        </div>
                                        <div>
                                            <label for="Message">Message</label>
                                            <textarea name="message" class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                          <div class="box-footer clearfix">
                                      <?php echo validation_errors();?>   
                                        <button type="submit" class="pull-right btn btn-default">Send <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                    </form>
                                </div>
                              
                            </div>
                        
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
