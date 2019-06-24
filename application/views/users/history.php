<!--this is a page where login history is displayed of user-->
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
                            <th class="text">Email</th>
                            <th class="text">Logged time</th>
                        </tr>
                        <?php
                            foreach($login_history as $row): ?>

                                <tr>
                                    <td><?php echo $row->email; ?></td>
                                    <td><?php echo $row->logged_time; ?></td>
                                </tr><?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of card section-->
