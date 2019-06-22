<!--this is a page where users can log in-->
<!--start of card section-->
<div class="card card-4">
    <div class="card-body">
<!--form tag openning-->
<?php echo form_open('users/login'); ?>
    <div class="row">
        <div class='col-md-4'>

        </div>
       <div class='col-md-4'>
       <!--this shows title of this page-->
            <h1 class=" text text-center"><?php echo $title; ?></h1>
            <div class="form-group">
                <input type="text" name="email" class="form-control"
                placeholder="Enter email" required autofocous>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control"
                placeholder="Enter password" required autofocous>
            </div>
                <button type="submit" class="btn btn-warning btn-block">Login</button>

       </div>
       <div class='col-md-4'>

       </div> 
    </div>
<?php echo form_close(); ?>
</div>
</div>
<!-- form tag closing-->
<div class="background">

</div>