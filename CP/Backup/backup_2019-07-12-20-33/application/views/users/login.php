<!--this is a page where users can log in-->
<!--start of card section-->
<div class="card card-4">
    <div class="card-body">
<!--form tag openning-->
<?php echo form_open('users/login'); ?>
<?php if(!$this->session->userdata('logged_in')) : ?>
    <div class="row">
        <div class='col-md-4'>

        </div>
       <div class='col-md-4'>
       <!--this shows title of this page-->
            <h1 class=" text text-center"><?php echo $title; ?></h1>
            <div class="form-group">
                <input type="text" maxlength="100" name="email" class="form-control"
                placeholder="Enter email" required autofocous>
            </div>
            <div class="form-group">
                <input type="password" minlength="8" maxlength="20" name="password" class="form-control"
                placeholder="Enter password" required autofocous>
            </div>
                <button type="submit" class="btn btn-warning btn-block">Login</button>

       </div>
       <div class='col-md-4'>

       </div> 
    </div>
<?php echo form_close(); ?>
</div>
</div><?php endif;?>
<?php if($this->session->userdata('logged_in')) : ?>
    <div class="show-info">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
            <h3><p class="text-danger">To login into different account you must logout from current account!!</P></h3>
            </div>
            <div class="col-md-4">

            </div>
</div><?php endif; ?>
</div>
<!-- form tag closing-->
<div class="background">

</div>