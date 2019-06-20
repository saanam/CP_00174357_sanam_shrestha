<div class="card card-4">
    <div class="card-body">
        <h2 class="text"><?= $title ?></h2>
            <?php foreach((array) $notes as $note) : ?>
                <h3 class="text"><?php echo $note['notename']; ?></h3>
                <div class="row">
                    <div class="col-md-3">
                        <img class="post-thumb" src="<?php echo site_url(); ?>assets/images/notes/<?php echo $note['post_image']; ?>">
                    </div>
                        <div class="col-md-9">
                            <small class ="note-date"> Saved on:<?php echo $note['notecreateddot']; ?></small><br>
                            <div class="note-index-body"> <?php echo word_limiter($note['notedetail'], 70); ?>
                            </div>
                            <br><br>
                            <p><a class="btn btn-warning" href="<?php echo site_url('/notes/'.$note['slug']); ?>">Read more</a></p>
                            <hr>
                        </div>
                        <hr>
                </div>
            <?php endforeach; ?>
                <div class="pagination-links">
                    <?php echo $this->pagination->create_links();?>
                </div>
    </div>
</div>

<div class="background">

</div>