<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Volunteer Events</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                        <!-- right column -->
                       <div class="col-md-6">
                            <div class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-calendar"></i>
                                    <h3 class="box-title">Events</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <ul class="todo-list ui-sortable">
                                        
                                           <?php
                                            $query = $this->db->query('SELECT eventName, eventDate, eventTime, eventLocation, eventDescription FROM org_event ORDER BY eventID DESC');

                                            foreach ($query->result_array() as $row)
                                            { ?>  
                                            <li>
                                            <div class="callout callout-danger">
                                                <h4><?php echo $row['eventName']; ?></h4>
                                                 <h6><?php echo $row['eventDate'].'&nbsp&nbsp&nbsp'.$row['eventTime']; ?></h6>
                                                <h6><?php echo $row['eventLocation']; ?></h6>
                                                <p><?php echo $row['eventDescription']; ?></p>
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