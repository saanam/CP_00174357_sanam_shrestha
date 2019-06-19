<div class="card card-4">
    <div class="card-body">
        <h2 class="text"><?= $title; ?></h2>
            <span style="float: right;color: #0086b3"> Welcome <?php echo $this->session->userdata('email') ;?></span></header>
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>users/edit_profile">Edit profile</a>
                </div>
                    <div class="col-sm-3 col-md-3">
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>users/change_password">Change password</a>
                    </div>
                            <div class="col-sm-3 col-md-3">
                            <a class="btn btn-primary" href="<?php echo base_url(); ?>users/login_history">Login log</a>
                            </div>
                                <div class="col-sm-3 col-md-3">
                                    <a class="btn btn-primary" href="<?php echo base_url(); ?>export_csv/index">Export data</a>
                                </div>
            </div>
    </div>
</div>
