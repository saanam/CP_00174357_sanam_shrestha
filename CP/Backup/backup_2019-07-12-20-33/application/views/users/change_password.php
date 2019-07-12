<!--this is a page where users can chage their old password-->
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
    <!--open form-->
        <?php echo form_open('users/p_update'); ?>
            <div class="row">
                <div class='col-md-3'>

                </div>
                <div class="col-md-6">
                <!--this shows title of this page-->
                    <h1 class=" text text-center"><?= $title; ?></h1>
                    <div class="form-group">
                        <label class="text">Old password</label>
                        <input type="password" minlength="8" maxlength="20" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                        <label class="text">New password</label>
                        <input type="password" minlength="8" maxlength="20" class="form-control" name="password1">
                    </div>

                    <div class="form-group">
                        <label class="text">Confirm password</label>
                        <input type="password" minlength="8" maxlength="20" class="form-control" name="password2">
                    </div>

                <button type="Submit" class="btn btn-warning btn-block">Update password</button>
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