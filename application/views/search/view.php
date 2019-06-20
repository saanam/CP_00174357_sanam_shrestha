<div class="card card-4">
    <div class="card-body">
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
                            <?php
                                foreach($notes as $row)
                                {
                                    
                                    ?> 
                                    <tr>
                                        <td><?php echo $row->notename; ?></td>
                                                                              
                                    </tr>
                                        
                                    <?php 
                                } 
                            ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

  