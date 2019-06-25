<!--this is a page where can register -->
<!--start of card section-->
<div class="card card-4">
    <div class="card-body">
        <!--sends any error to validation_errors-->
        <div class="text text-center text-danger"><?php echo validation_errors(); ?>
            <?php echo 'Note: Password should be at least 8
                    characters in length and should include 
                    at least one upper case letter, one 
                    number, and one special character.'
                    ?> <br /> <br />
        </div>
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
                    <input type="text" minlength="3" maxlength="50" class="form-control" name="name"
                    placeholder="Nickname" required>
                </div>

                <div class="form-group">
                    <label class="text">Email</label>
                    <input type="text" maxlength="100" class="form-control" name="email"
                    placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label class="text">Password</label>
                    <input type="password" minlength="8" maxlength="20"class="form-control" name="password"
                    placeholder="Password" required>
                </div>

                <div class="form-group">
                    <label class="text">Confirm Password</label>
                    <input type="password" minlength="8" maxlength="20" class="form-control" name="password2"
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
