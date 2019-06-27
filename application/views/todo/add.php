<!--this is a page of todo list where tasks can be added-->
<!--start of card section-->
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
        <div class="row">
                <div class="col-md-3 form-group">

                </div>
                <div class="col-md-6 form-group">
                <!--this shows title of this page-->
                <h2 class="text text-center card-header"><?= $title ;?></h2>
                </div>
                <div class="col-md-3 form-group">

                </div>
        </div>
            <!-- any errors encounted, it will be shown here-->
            <div class="text text-danger text-center"><strong><?php echo validation_errors(); ?>
            </strong></div>
            <!--opens form support images-->
                <?php echo form_open_multipart('todo/add'); ?>
                    <div class="row">
                        <div class="col-md-3 form-group">

                        </div>
                            <div class="col-md-6 form-group card-footer">
                                <label class="text">Task name</label>
                                <input type="text" class="form-control" name="todoname" placeholder="Task name">

                                <label class="text control-label" for="date">Date</label>
                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>

                                <button type="submit" class="btn btn-warning">Add</button>
                            </div>
                            <div class="col-md-3 form-group">

                            </div>
                    </div>
                    
                </form>
    </div>
</div>
<!--start of card section-->
<div class="background">

</div>