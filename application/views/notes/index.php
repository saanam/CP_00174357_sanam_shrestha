<!--this is a index page of note where added notes are shown-->
<!--this part presents cart section-->
<div class="card card-4">
    <div class="card-body">
    <!--this shows title of this page-->
    <div class="row card-header">
        <div class="col-md-6">
            <h2 class="text"><?= $title ?></h2>
        </div>
        <!--div to show taks notification-->
        <div class="col-md-6">
            <?php if($notify > 0)
            {?>
               <h3 class=" notify text"<center><strong><?php echo 'YOU GOT TASKS TO COMPLETE!' ?>
               </strong></center></h3> 
           <?php } 
            else{?>
                <h3 class=" notify text"<center><?php echo 'ALL TASKS ARE COMPLETE. ADD NEW TASK NOW!' ;}?>
                </strong></center></h3> 
        </div>
        </div>
            <?php foreach((array) $notes as $note) : ?>
            <!-- here name of note is displayed-->
                <h3 class="text"><?php echo $note['notename']; ?></h3> 
                <div class="row">
                    <div class="col-md-3">
                    <!-- note uploded/default image is shown-->
                        <img class="post-thumb" src="<?php echo site_url(); ?>assets/images/notes/<?php 
                        echo $note['post_image']; ?>"> 
                    </div>
                        <div class="col-md-9">
                            <!--here date in which note is crated is displayed-->
                            <small class ="note-date"> Saved on:<?php echo $note['notecreateddot']; ?>
                            </small><br> 
                            <!-- Note detail is shown with word limit of 70-->
                            <div class="note-index-body"> <?php echo word_limiter($note['notedetail'], 70); ?> 
                            </div>
                            <br><br>
                            <!-- this button leads to full note page of that particular note-->
                            <p><a class="btn btn-warning" href="<?php echo site_url('/notes/'.$note['slug']); ?>
                            ">Read more</a></p> 
                            <hr>
                        </div>
                        <hr>
                </div>
            <?php endforeach; ?>
                <div class="pagination-links">
                    <?php echo $this->pagination->create_links();?> <!-- this shows pagination on the buttom 
                    of page -->
                </div>
    </div>
</div>
<!--end of card section-->

<div class="background">

</div>
<!--end of page-->