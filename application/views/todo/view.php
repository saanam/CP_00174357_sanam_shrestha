<h2 class="text"><?= $title; ?></h2>
<ul class="list-group">

<?php foreach($todos as $todo): ?>
	<li class="list-group-item todo"><?php echo $todo['todoname']; ?></a>

    </li>
<?php endforeach; ?>
</ul>