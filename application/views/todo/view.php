<div class="card card-4">
    <div class="card-body">
        <h2 class="text"><?= $title; ?></h2>
            <ul class="list-group">

                <?php foreach($todos as $todo): ?>
                    <li class="list-group-item todo"><?php echo $todo['todoname']; ?></a>

                    </li>
                <?php endforeach; ?>
                </ul>
    </div>
</div>

    <div class="background">

    </div>