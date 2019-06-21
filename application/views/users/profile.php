<div class="card card-4">
    <div class="card-body">
        <h2 class="text"><center><?= $title; ?></h2>
            <span style="color: #0086b3"> Welcome <?php echo $this->session->userdata('email') ;?></center></span></header><br /><br />
            <div class="row">
                <div class="col-sm-3 col-md-3"><center>
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>users/edit_profile">Edit profile</a><br /><br />
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>users/change_password">Change password</a><br /><br />
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>users/login_history">Login log</a><br /><br />
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>export_csv/index">Export data</a><br /><br />
                    </center>
                </div>
                
                            <div class="profile col-sm-4 col-md-4 text-danger">
                                <tr>
                                    <th class="text"><center><strong><u>Total number of notes stored:</u></strong><center></th><br /> <br />
                                </tr>
                                <?php if( $row > 0)
                                
                                    {
                                        ?><tr>
                                        <td><center><strong><?php echo $row; ?></strong></center></td>
                                        </tr>
                                    <?php }
                                    else{
                                        echo 'There are no notes in your account. Visit addnote to add notes. ';
                                    }
                                ?>
                            </div>

                                <div class="col-sm-4 col-md-4 text-danger">
                                <tr>
                                    <th class="text"><center><strong><u>Total number of tasks completed:</u></strong><center></th><br /> <br />
                                </tr>
                                <?php if( $task > 0)
                                
                                    {
                                        ?><tr>
                                        <td><center><strong><?php echo $task; ?></strong></center></td>
                                        </tr>
                                    <?php }
                                    else{
                                        echo 'You have not completed any tasks. Visit todo, add task and complete your remaning tasks. ';
                                    }
                                ?>                                    
                                </div>
            </div>
    </div>
</div>

<div class="background">

</div>