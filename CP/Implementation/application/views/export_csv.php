<div class="card card-4">
    <div class="card-body">
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
                                <input type="submit" name="export" class="btn btn-success btn-xs" value="Export to CSV"/>

                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered talble-striped">
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
