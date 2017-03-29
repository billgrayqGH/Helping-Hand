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
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Event Data Table</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Event ID</th>
                                                <th>Event Name</th>
                                                <th>Date</th>  
                                                <th>Time</th>
                                                <th>Location</th>
                                                <th>Description</th>
                                                <th>Volunteer ID</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                 <?php
                                              $query = $this->db->query('SELECT eventID, eventName, eventDate, eventTime, eventLocation,eventDescription, volID FROM org_event');

                                              foreach ($query->result_array() as $row)
                                              { ?>          
                                              <?php    echo '<td>'. $row['eventID'].'</td>'; ?>
                                              <?php    echo '<td>'. $row['eventName'].'</td>'; ?>
                                              <?php    echo '<td>'. $row['eventDate'].'</td>'; ?>
                                              <?php    echo '<td>'. $row['eventTime'].'</td>';?>
                                              <?php    echo '<td>'. $row['eventLocation'].'</td>';?>
                                              <?php    echo '<td>'. $row['eventDescription'].'</td>'; ?>
                                              <?php    echo '<td>'. $row['volID'].'</td>';?>

                                                  <td>                 
                                                      <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url('index.php/welcome/eeve'); echo '/'.$row['eventID'];?>'"><i class='fa fa-pencil-square-o'></i> Edit</button>
                                                      <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url('index.php/welcome/delete_eve'); echo '/'.$row['eventID']; ?>'"><i class='fa fa-trash-o'></i> Delete</button>
                                                  </td>
                                                  </tr>
                                              <?php }?>  
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Event ID</th>
                                                <th>Event Name</th>
                                                <th>Date</th>  
                                                <th>Time</th>
                                                <th>Location</th>
                                                <th>Description</th>
                                                <th>Volunteer ID</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
