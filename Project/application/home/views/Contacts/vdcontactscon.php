  <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Contacts Data Table</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Contacts Data Table</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Contact ID</th>
                                                <th>Contact Name</th>
                                                <th>Contact Number</th>  
                                                <th>Email</th>
                                                <th>Contact Address</th>
                                                <th>Volunteer ID</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr> 
                                           <?php
                                            $query = $this->db->query('SELECT contactID, contactName, contactNumber, contactEmail, contactAddress, volID FROM v_contacts');

                                            foreach ($query->result_array() as $row)
                                            { ?>    
                                            <?php    echo '<td>'. $row['contactID'].'</td>'; ?>
                                            <?php    echo '<td>'. $row['contactName'].'</td>'; ?>   
                                            <?php    echo '<td>'. $row['contactNumber'].'</td>';?>
                                            <?php    echo '<td>'. $row['contactEmail'].'</td>'; ?>
                                            <?php    echo '<td>'. $row['contactAddress'].'</td>';?>
                                            <?php    echo '<td>'. $row['volID'].'</td>'; ?>
                                                   
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url('index.php/welcome/econ');echo '/'.$row['contactID'];?>'"><i class='fa fa-pencil-square-o'></i> Edit</button>
                                                    <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url('index.php/welcome/delete_con'); echo '/'.$row['contactID']; ?>'"><i class='fa fa-trash-o'></i> Delete</button>
                                                </td>
                                                </tr>
                                            <?php }?>  
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Contact ID</th>
                                                <th>Contact Name</th>
                                                <th>Contact Number</th>  
                                                <th>Email</th>
                                                <th>Contact Address</th>
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
