<section id="portfolio">
    <div class="container">
    <div class="row">
    <h1 class="title">Announcements</h1>

    <aside class="right-side">
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
    </aside>
    <br>
  
    
    </div>
    </div>   
    </section>   