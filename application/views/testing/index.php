<!--this is a index page of note where added notes are shown-->
<!--this part presents cart section-->
<div class="card card-4">
    <div class="card-body">
    <!--this shows title of this page-->
    <div class="row card-header">
        <div class="col-md-6">
            <h2 class="text"><strong>Testing</strong></h2>
        </div>
    </div>
    <div class="container">
        <?php if($try):
        {
            echo $try;
        } endif; ?>

<?php if($try1):
        {
            echo $try1;
        } endif; ?>

                <?php if($try2):
        {
            echo $try2;
        } endif; ?>

                <?php if($try3):
        {
            echo $try3;
        } endif; ?>

    </div>