<div class="card card-4">
    <div class="card-body">
        <?php echo form_open('users/p_update'); ?>
            <div class="row">
                <div class='col-md-3'>

                </div>
                <div class="col-md-6">
                    <h1 class=" text text-center"><?= $title; ?></h1>
                    <div class="form-group">
                        <label class="text">Old password</label>
                        <input type="password" class="form-control" name="password"
                        >
                    </div>

                    <div class="form-group">
                        <label class="text">New password</label>
                        <input type="password" class="form-control" name="password1"
                        >
                    </div>

                    <div class="form-group">
                        <label class="text">Confirm password</label>
                        <input type="password" class="form-control" name="password2"
                        >
                    </div>

                <button type="Submit" class="btn btn-warning btn-block">Update password</button>
            </div>
            <div class='col-md-3'>

            </div>    
        </div>
        </form>
    </div>
</div>

<div class="background">

</div>