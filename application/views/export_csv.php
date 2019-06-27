<!--this is a page where user can export data-->
<!--start of card section-->
<div class="card card-4">
    <div class="card-body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Toggle Sidebar</span>
            </button>

        </div>
    </nav>
        <!-- this is a title of current page-->
        <h3 class="text" align="center"> Export data of notes</h3>
            <br />
            <form method="POST" action="<?php echo base_url(); ?>export_csv/export">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div clss="col-md-6">
                                <h3 class="panel-title text"> Notes data</h3>
                            </div>
                            <div class="col-md-6" align="right">
                                <input type="submit" name="export" class="btn btn-success btn-xs" value="Export"/>

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered talble-striped">
                            <!-- here all notes aree displayed of current user-->
                                <tr>
                                    <th class="text">Note name</th>
                                    <th class="text">Description</th>
                                </tr>
                                <?php
                                    foreach($note_data->result_array() as $row)
                                    {
                                        echo '
                                            <tr>
                                                <td>'.$row['notename'].' </td>
                                                <td>'.$row['notedetail'].'</td>
                                            </tr>
                                        ';
                                    } 
                                ?>
                        </div>
                    </div>
                </div>
            </form>
    </div>
</div>
<!--end of card section-->
