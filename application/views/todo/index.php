<!--this is a page of todo list where incompleted tasks are shown and new tasks are added-->
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
    <!--this shows title of this page-->
        <h2 class="text card-header"><?= $title; ?></h2><br />

            <ul class="list-group">
                <div class="row">
                    <div class="col-sm-3">
                    <!--add tasks button-->
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>todo/add">Add task</a>
                        <br />
                        <br />
                        <!--ciew completed task button-->
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>todo/view">View completed tasks</a>
                    </div>

                        <div class="col-sm-9 card-footer">
                        <!--here aded incomplete tasks are displayd-->
                        <!-- start of foreach-->
                            <?php foreach($todos as $todo): ?>
                            <!--task name is dispayed here-->
                                <li class="list-group-item todo "><?php echo $todo['todoname']; ?></a>
                                    <?php if($this->session->userdata('user_id') == $todo['user_id']) :?>
                                        <form class="todo-update" action = "todo/update/<?php echo $todo["todoid"]; ?>" method = "POST">
                                        <!-- to set task complete-->
                                            <input type="submit" class="btn-link text-danger" value="[Set task as completed]">

                                        </form>
                                    <?php endif; ?>

                                </li>
                                <br />
                            <?php endforeach; ?>
                            <!--end of foreach-->
                        </div>
                </div>
            </ul>
    </div>
</div>
<!--start of card section-->    
<div class="background">

</div>