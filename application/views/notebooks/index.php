<div class="card card-4">
    <div class="card-body">
        <h2 class="text"><?= $title; ?></h2>
        <ul class="list-group">
            <?php foreach($notebooks as $notebook): ?>
                <li class="list-group-item notebook"><a href="<?php echo site_url('/notebooks/notes/'.$notebook['notebookid']); ?>"><?php echo $notebook['notebookname']; ?></a>
                <?php if($this->session->userdata('user_id') == $notebook['user_id']) :?>
                <form class="notebook-delete" action = "notebooks/delete/<?php echo $notebook["notebookid"]; ?>" method = "POST">
                    <input type="submit" class="btn-link text-danger" value="[X]">

</form>
                <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="background">

</div>