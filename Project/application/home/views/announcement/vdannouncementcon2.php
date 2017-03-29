  <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Announcement Data Table</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Announcement Data Table</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Announcement ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Volunteer ID</th>  
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                               <?php foreach($volunteer_info as $row)  
                                            { ?>         
                                            <?php    echo '<td>'. $row['announcementID'].'</td>'; ?>
                                            <?php    echo '<td>'. $row['announcementTitle'].'</td>'; ?>
                                            <?php    echo '<td>'. $row['announcementDesc'].'</td>'; ?>
                                            <?php    echo '<td>'. $row['volID'].'</td>';?>
                                                
                                                <td>
                                                    <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url('index.php/welcome/eann2'); echo '/'.$row['announcementID'];?>'"><i class='fa fa-pencil-square-o'></i> Edit</button>
                                                    <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url('index.php/welcome/delete_ann'); echo '/'.$row['announcementID']; ?>'"><i class='fa fa-trash-o'></i> Delete</button>
                                                </td>
                                                </tr>
                                            <?php }?>  
                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Announcement ID</th>
                                                <th>Title</th>
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