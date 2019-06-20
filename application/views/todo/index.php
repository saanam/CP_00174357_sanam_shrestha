<div class="card card-4">
    <div class="card-body">
        <h2 class="text"><?= $title; ?></h2><br />

            <ul class="list-group">
                <div class="row">
                    <div class="col-sm-3">
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>todo/add">Add task</a>
                        <br />
                        <br />
                        <a class="btn btn-primary" href="<?php echo base_url(); ?>todo/view">View completed tasks</a>
                    </div>

                        <div class="col-sm-9">
                            <?php foreach($todos as $todo): ?>
                                <li class="list-group-item todo"><?php echo $todo['todoname']; ?></a>
                                    <?php if($this->session->userdata('user_id') == $todo['user_id']) :?>
                                        <form class="todo-update" action = "todo/update/<?php echo $todo["todoid"]; ?>" method = "POST">
                                            <input type="submit" class="btn-link text-danger" value="[Set task as completed]">

                                        </form>
                                    <?php endif; ?>

                                </li>
                                <br />
                            <?php endforeach; ?>
                        </div>
                </div>
            </ul>
    </div>
</div>
    
<div class="background">

</div>