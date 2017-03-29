<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Volunteer Announcements</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                        <!-- right column -->
                       <div class="col-md-6">
                            <div class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-bullhorn"></i>
                                    <h3 class="box-title">Announcements</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <ul class="todo-list ui-sortable">
                                          <?php
                                            $query = $this->db->query('SELECT announcementTitle, announcementDesc FROM org_announcement ORDER BY announcementID DESC');

                                            foreach ($query->result_array() as $row)
                                            { ?>  
                                            <li>
                                            <div class="callout callout-warning">
                                                <h4><?php echo $row['announcementTitle']; ?></h4>
                                                <p><?php echo $row['announcementDesc']; ?></p>
                                            </div>
                                        </li> 
                                            <?php } ?>
                                    </ul> 
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->