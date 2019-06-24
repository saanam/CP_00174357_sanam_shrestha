<!--this is a index page of note where added notes are shown-->
<!--this part presents cart section-->
<div class="card card-4">
    <div class="card-body">
    <!--this shows title of this page-->
        <h2 class="text"><?= $title ?></h2>
            <?php foreach((array) $trash as $t) : ?>
            <!-- here name of note is displayed-->
                <h3 class="text"><?php echo $t['notename']; ?></h3> 
                <div class="row">
                    <div class="col-md-3">
                    <!-- note uploded/default image is shown-->
                        <img class="post-thumb" src="<?php echo site_url(); ?>assets/images/notes/<?php echo $t['post_image']; ?>"> 
                    </div>
                        <div class="col-md-9">
                            <!--here date in which note is crated is displayed-->
                            <small class ="note-date"> Deleted on:<?php echo $t['deleteddate']; ?></small><br> 
                            <!-- Note detail is shown with word limit of 70-->
                            <div class="note-index-body"> <?php echo word_limiter($t['notedetail'], 70); ?> 
                            </div>
                            <br><br>
                            <?php echo form_open('/trash/recover/'.$t['tid']); ?>
                            <!-- this button leads to full note page of that particular note-->
                            <p><button type="submit" class="btn btn-warning" method="POST">Recover</button></p> </form>
                            <hr>
                        </div>
                        <hr>
                </div>
            <?php endforeach; ?>
                <div class="pagination-links">
                    <?php echo $this->pagination->create_links();?> <!-- this shows pagination on the buttom of page -->
                </div>
    </div>
</div>
<!--end of card section-->

<div class="background">

</div>