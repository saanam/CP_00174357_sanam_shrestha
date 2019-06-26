<!-- this is index page of notebook where created notebooks are displayed-->
<!--this part presents cart section-->
<div class="card card-4">
    <div class="card-body">
        <!--This part shows title of page-->
        <h2 class="text"><?= $title; ?></h2>
        <div class="group">
            <?php foreach($notebooks as $notebook): ?>
                <div class="list-group-item notebook"><a href="<?php 
                echo site_url('/notebooks/notes/'.$notebook['notebookid']); ?>"><?php 
                echo $notebook['notebookname']; ?></a>
                <?php if($this->session->userdata('user_id') == $notebook['user_id']) :?>
                <form class="notebook-delete" action = "notebooks/delete/<?php 
                echo $notebook["notebookid"]; ?>" method = "POST">
                    <input type="submit" class="btn-link text-danger" value="[X]">

                </form>
                <?php endif; ?>
                </div><br />
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--end of card section-->
<div class="background">

</div>
<!--end of notebook index page-->