<!--this is a page of searchnote where all user noted are displayed-->
<!--start of card section-->
<div class="card card-4">
    <div class="card-body">
    <!--this shows title of this page-->
       <h2 class="text"> <?= $title; ?> </h2>
        <br />

            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered talble-striped">
                            <tr>
                                <th class="text">Note Name</th>
                                                              
                            </tr>
                            <!--start of foreach-->
                            <?php
                                foreach($notes as $row): ?>

                                    <!--here note name is displayed--> 
                                    <tr>
                                        <td><?php echo $row->notename; ?></td>
                                                                              
                                    </tr>
                        </div><?php endforeach; ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end of card section-->

  