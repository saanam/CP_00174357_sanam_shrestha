<div class="card card-4">
    <div class="card-body">
        <h2 class="text text-underline"><strong><?php echo $note['notename']; ?></strong></h2>
            <small class ="note-date"> Saved on:<?php echo $note['notecreateddot']; ?></small><br>
            <div class="row">
                <div class="col-sm-4">

                </div>

                <div class="col-sm-4">                
                <img class="note-image" src="<?php echo site_url(); ?>assets/images/notes/<?php echo $note['post_image']; ?>">
                
                </div>

                <div class="col-sm-4">

                </div>
</div>

                <div class="note-body ">
                        <?php echo $note['notedetail']; ?>
                </div>

            <?php if($this->session->userdata('user_id') == $note['user_id']) :?>
                <hr>
                    <a class="btn btn-warning col-sm-1 col-sm-offset-1" href="edit/<?php echo $note['slug']; ?>">Edit</a>
                        <?php echo form_open('/notes/delete/'.$note['noteid']); ?>
                            <input type="submit" value="Delete" class="btn btn-danger col-sm-1 col-sm-offset-1">
                    </form>
            <?php endif; ?>
    </div>
</div>

<div class="background">

</div>