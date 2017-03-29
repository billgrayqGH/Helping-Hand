  <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Volunteer Data Table</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Volunteer Data Table</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Volunteer ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>  
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Position</th>
                                                <th>Date Joined</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                      
                                        <tbody>
                                             <tr>
                                            <?php
                                            $query = $this->db->query('SELECT volunteerID, volunteerFirstname, volunteerLastname, volunteerUsername, volunteerPassword, volunteerAddress, volunteerContact, volunteerEmail, volunteerPosition, dateJoined FROM volunteer');

                                            foreach ($query->result_array() as $row)
                                            { ?>          
                                            <?php    echo '<td>'. $row['volunteerID'].'</td>'; ?>
                                            <?php    echo '<td>'. $row['volunteerFirstname'].'</td>'; ?>
                                            <?php    echo '<td>'. $row['volunteerLastname'].'</td>'; ?>
                                            <?php    echo '<td>'. $row['volunteerUsername'].'</td>';?>
                                            <?php    echo '<td>'. $row['volunteerPassword'].'</td>';?>
                                            <?php    echo '<td>'. $row['volunteerAddress'].'</td>'; ?>
                                            <?php    echo '<td>'. $row['volunteerContact'].'</td>';?>
                                            <?php    echo '<td>'. $row['volunteerEmail'].'</td>';?>
                                            <?php    echo '<td>'. $row['volunteerPosition'].'</td>';?>
                                            <?php    echo '<td>'. $row['dateJoined'].'</td>'; ?>
                                                   
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url('index.php/welcome/vava');echo '/'.$row['volunteerID'];?>'"><i class='fa fa-users'></i> Give Task</button>
                                                    <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url('index.php/welcome/evol');echo '/'.$row['volunteerID'];?>'"><i class='fa fa-pencil-square-o'></i> Edit</button>
                                                    <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url('index.php/welcome/delete_vol'); echo '/'.$row['volunteerID']; ?>'"><i class='fa fa-trash-o'></i> Delete</button>
                                                </td>
                                                </tr>
                                            <?php }?>  
                                                
                                           
                                      
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Volunteer ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>  
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                <th>Email</th>
                                                <th>Position</th>
                                                <th>Date Joined</th>
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

