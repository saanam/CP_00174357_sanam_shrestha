<!--this is add page of notebook where user can add new notebook -->
<!--this part presents cart section-->
<div class="card card-4">
    <div class="card-body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Toggle Sidebar</span>
            </button>

        </div>
    </nav>
        <!--This part shows title of page-->
        <h2 class="text"><?= $title ;?></h2>
        <!-- any errors encountred will be shown in validation_errors part-->
        <div class="text text-danger text-center"><strong><?php echo validation_errors(); ?>
        </strong></div>
        <!--form_open_multipart is like <form> which supports image also -->
        <?php echo form_open_multipart('notebooks/add'); ?>
            <div class="form-group">
            <label class="text">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>

        </form>
        <!--close form part-->
    </div>
</div>  
<!--end of card section-->
<div class="background">

</div>
<!-- end of add page odnotebook-->