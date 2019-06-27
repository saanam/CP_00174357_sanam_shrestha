<!--this is a page where user get option-->
<!--start of card section-->
<div class="card card-4">
    <div class="card-body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Toggle Pinned Notes</span>
            </button>

        </div>
    </nav>
    <!--this shows title of this page-->
        <h2 class="text card-header"><center><?= $title; ?></h2>
        <!--here user email is shown-->
            <div class="text text-center"><strong> Welcome <?php echo $this->session->userdata('email') ;?>
            </strong>
            </div></center></span></header>
            <div class="row">
                <div class="col-sm-4 col-md-4 card-footer"><center>
                    <a class="btn btn-success" href="<?php echo base_url(); ?>users/edit_profile">Edit 
                    profile</a><br /><br />
                    <a class="btn btn-success" href="<?php echo base_url(); ?>users/change_password">Change 
                    password</a><br /><br />
                    <a class="btn btn-success" href="<?php echo base_url(); ?>users/login_history">Login 
                    log</a><br /><br />
                    <a class="btn btn-success" href="<?php echo base_url(); ?>export_csv/index">Export 
                    data</a><br /><br />
                    <a class="btn btn-success" href="<?php echo base_url(); ?>profile/trash">
                    Trash</a><br /><br />
                    </center>
                </div>
                            <!--Total number of notes saved are shown-->
                            <div class="profile col-sm-4 col-md-4 text-danger card-footer">
                                <tr>
                                    <th class="text"><center><strong><u>Total number of 
                                    notes stored:</u></strong><center></th><br /> <br />
                                </tr>
                                <?php if( $row > 0)                                
                                    {
                                        ?><tr>
                                        <td><center><strong><?php echo $row; ?></strong></center></td>
                                        </tr>
                                    <?php }
                                    else{
                                        echo 'There are no notes in your account. 
                                        Visit addnote to add notes. ';
                                    }
                                ?>
                            </div>
                                <!--Total number of tasks savcompleted are shown-->
                                <div class="col-sm-4 col-md-4 text-danger card-footer">
                                <tr>
                                    <th class="text"><center><strong><u>Total number of 
                                    tasks added:</u></strong><center></th><br /> <br />
                                </tr>
                                <?php if( $task > 0)                                
                                    {
                                        ?><tr>
                                        <td><center><strong><?php echo $task; ?></strong></center></td>
                                        </tr>
                                    <?php }
                                    else{
                                        echo 'You have not completed any tasks. 
                                        Visit todo, add task and complete your remaning tasks. ';
                                    }
                                ?>                                    
                                </div>
            </div>
    </div>
</div>
<!--end of card section-->
<div class="background">

</div>