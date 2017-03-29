         <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="http://localhost/Project/designs/admin/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><?php
                                             $id = $this->session->userdata('userid');
                                             $fn = $this->session->userdata('fname');
                                             $ln = $this->session->userdata('lname');
                                             echo $id.' '.$fn.' '. $ln; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                   
                <ul class="sidebar-menu">
                     <li>
                             <a href="<?php echo base_url('index.php/welcome/volview');?>">
                                 <i class="fa fa-check-circle-o"></i>Volunteer Profile
                            </a> 
                        </li>
                         <li>
                             <a href="<?php echo base_url('index.php/welcome/voleve');?>">
                                 <i class="fa fa-check-circle-o"></i>Volunteer Events
                            </a> 
                        </li> 
                        <li>
                             <a href="<?php echo base_url('index.php/welcome/volann');?>">
                                 <i class="fa fa-check-circle-o"></i>Volunteer Announcements
                            </a> 
                        </li>
                        <li>
                             <a href="<?php echo base_url('index.php/welcome/voltask');?>">
                                 <i class="fa fa-puzzle-piece"></i> Volunteer Task
                            </a> 
                        </li>
                        <li>
                             <a href="<?php echo base_url('index.php/welcome/calendar');?>">
                                 <i class="fa fa-calendar"></i> Volunteer Calendar
                            </a> 
                        </li> 
                         <hr>
                         <li>
                             <a href="<?php echo base_url('index.php/welcome/chat');?>">
                                 <i class="fa fa-comment"></i> Chat
                            </a> 
                        </li>
                        <hr>
                         <li>
                             <a href="<?php echo base_url('index.php/welcome/email');?>">
                                 <i class="fa fa-envelope"></i> Email
                            </a> 
                        </li>
                         
                        <hr>
                             <li>
                             <a href="<?php echo base_url('index.php/welcome/vdvol');?>">
                                 <i class="fa fa-male"></i>View/Delete Volunteer Record
                            </a> 
                        </li>
                         <hr>
                          <li>
                             <a href="<?php echo base_url('index.php/welcome/etask');?>">
                                 <i class="fa fa-pencil"></i>Edit Task
                            </a> 
                        </li>
                         <li>
                             <a href="<?php echo base_url('index.php/welcome/vdtask');?>">
                                 <i class="fa fa-pencil"></i>View/Delete Task
                            </a> 
                        </li>
                        <hr>
                          <li>
                             <a href="<?php echo base_url('index.php/welcome/vdann');?>">
                                 <i class="fa fa-globe"></i>View/Delete Announcements
                            </a> 
                        </li>
                        <li>
                             <a href="<?php echo base_url('index.php/welcome/aann');?>">
                                 <i class="fa fa-globe"></i> Add Announcements
                            </a> 
                        </li>
                         <hr>
                            <li>
                             <a href="<?php echo base_url('index.php/welcome/vdeve');?>">
                                 <i class="fa fa-flag"></i> View/Delete Events
                            </a> 
                        </li>
                         <li>
                             <a href="<?php echo base_url('index.php/welcome/aeve');?>">
                                 <i class="fa fa-flag"></i> Add Events
                            </a> 
                        </li>
                          <hr>
                          <li>
                             <a href="<?php echo base_url('index.php/welcome/vdcon');?>">
                                 <i class="fa fa-phone"></i>View/Delete Contacts
                            </a> 
                        </li>
                        <li>
                             <a href="<?php echo base_url('index.php/welcome/acon');?>">
                                 <i class="fa fa-phone"></i> Add Contacts
                            </a> 
                        </li>
                         
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
        