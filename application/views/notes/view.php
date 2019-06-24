<!-- this is a view page for full screen of a particular note-->
<!--start of card section-->
<div class="card card-4">
    <div class="card-body">
    <!--this is note name-->
        <h2 class="text text-underline"><strong><?php echo $note['notename']; ?></strong></h2>
            <small class ="note-date"> Saved on:<?php echo $note['notecreateddot']; ?></small><br>
            <div class="row">
                <div class="col-sm-4">

                </div>
                <!-- in this div picture is shown-->
                <div class="col-sm-4">                
                <img class="note-image" 
                src="<?php echo site_url(); ?>assets/images/notes/<?php 
                echo $note['post_image']; ?>">
                </div>

                <div class="col-sm-4">

                </div>
            </div>
                <!-- in this div note detail is shown-->
                <div class="note-body ">
                        <?php echo $note['notedetail']; ?>
                </div>
            <!--start of if condition-->
            <?php if($this->session->userdata('user_id') == $note['user_id']) :?>
                <hr>
                    <a class="btn btn-warning col-sm-1 col-sm-offset-1" href="edit/<?php 
                    echo $note['slug']; ?>">Edit</a>
                        <?php echo form_open('/notes/delete/'.$note['noteid']); ?>
                            <input type="submit" value="Delete" class="btn btn-danger col-sm-1 col-sm-offset-1">
                    </form>
            <?php endif; ?>
            <!--end of if condotion-->
    </div>
</div>
<!--end of card section-->
<div class="background">

</div>
<!---3nd of page-->