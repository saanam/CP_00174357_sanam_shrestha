<!--this is a page of todo list where completed tasks are shown-->
<!--start of card section-->
<div class="card card-4">
    <div class="card-body">
    <!--this shows title of this page-->
        <h2 class="text"><?= $title; ?></h2>
            <ul class="list-group">
                <!--start of foreach-->
                <?php foreach($todos as $todo): ?>
                <!--all completed tasks are displayed-->
                    <li class="list-group-item todo"><?php echo $todo['todoname']; ?></a>

                    </li>
                <?php endforeach; ?>
                <!--end of foreach-->
                </ul>
    </div>
</div>
<!--end of card section-->
    <div class="background">

    </div>