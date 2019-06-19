<div class="card card-4">
    <div class="card-body">
            <!--sends any error to validation_errors-->
            <?php echo validation_errors(); ?>

            <?php echo form_open('users/update'); ?>
                <div class="row">
                    <div class='col-md-3'>

                    </div>
                    <div class="col-md-6">
                        <h1 class=" text text-center"><?= $title; ?></h1>
                        <div class="form-group">
                            <label class="text">Name</label>
                            <input type="text" class="form-control" name="name"
                            placeholder="Name" value="<?php echo $user['name']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="text">Email</label>
                            <input type="text" class="form-control" name="email"
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

