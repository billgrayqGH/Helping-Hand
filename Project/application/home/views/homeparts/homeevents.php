 <section id="calendar">
    <div class="container">
    <div class="row">
    <h1 class="title">Events</h1>
    <br>
    
     <aside class="right-side">
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
    </aside>
  
    
    </div>
    </div>   
    </section>   