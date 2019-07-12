<!--this is a page where users can edit their profile-->
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
            <!--sends any error to validation_errors-->
            <?php echo validation_errors(); ?>
            <!--open form-->
            <?php echo form_open('users/update'); ?>
                <div class="row">
                    <div class='col-md-3'>

                    </div>
                    <div class="col-md-6">
                    <!--this shows title of this page-->
                        <h1 class=" text text-center"><?= $title; ?></h1>
                        <div class="form-group">
                            <label class="text">Nickname</label>
                            <!-- here user's name is displayed-->
                            <input type="text" minlength="3" maxlength="50" class="form-control" name="name"
                            placeholder="Nickname" value="<?php echo $user['name']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="text">Email</label>
                            <!-- here user's email is displayed-->
                            <input type="text" maxlength="100" class="form-control" name="email"
                            placeholder="Email" value="<?php echo $user['email']; ?>">
                        </div>

                        <button type="Submit" class="btn btn-warning btn-block">Update</button>
                    </div>
                        <div class='col-md-3'>

                        </div>    
                </div>
            </form>
    </div>
</div>
<!--end of card section-->
<div class="background">

</div>