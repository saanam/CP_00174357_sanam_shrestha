<!--this is a page where can register -->
<!--start of card section-->
<div class="card card-4">
    <div class="card-body">
        <!--sends any error to validation_errors-->
        <?php echo validation_errors(); ?>
        <!--form tag openning-->
        <?php echo form_open('users/register'); ?>
        <div class="row">
            <div class='col-md-4'>

            </div>
            <div class="col-md-4">
            <!--this shows title of this page-->
                <h1 class=" text text-center"><?= $title; ?></h1>
                <div class="form-group">
                    <label class="text">Nickname</label>
                    <input type="text" class="form-control" name="name"
                    placeholder="Nickname" required>
                </div>

                <div class="form-group">
                    <label class="text">Email</label>
                    <input type="text" class="form-control" name="email"
                    placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label class="text">Password</label>
                    <input type="password" class="form-control" name="password"
                    placeholder="Password" required>
                </div>

                <div class="form-group">
                    <label class="text">Confirm Password</label>
                    <input type="password" class="form-control" name="password2"
                    placeholder="Confirm password" required>
                </div>

                <button type="Submit" class="btn btn-warning btn-block">Submit</button>
            </div>
        <div class='col-md-4'>

            </div>    
        </div>
    </div>
</div>
<?php echo form_close();?>
<!--form tag closing-->
<!--end of card section-->
<div class="background">

</div>
