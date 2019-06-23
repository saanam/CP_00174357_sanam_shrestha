<div class="card card-4">
    <div class="card-body">
        <div class="row">
                <div class="col-md-3 form-group">

                </div>
                <div class="col-md-6 form-group">
                <h2 class="text text-center"><?= $title ;?></h2>
                </div>
                <div class="col-md-3 form-group">

                </div>
        </div>

            <?php echo validation_errors(); ?>
                <?php echo form_open_multipart('todo/add'); ?>
                    <div class="row">
                        <div class="col-md-3 form-group">

                        </div>
                            <div class="col-md-6 form-group">
                                <label class="text">Task name</label>
                                <input type="text" class="form-control" name="todoname" placeholder="Task name">

                                <label class="text control-label" for="date">Date</label>
                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>

                                <button type="submit" class="btn btn-warning">Add</button>
                            </div>
                            <div class="col-md-3 form-group">

                            </div>
                    </div>
                    
                </form>
    </div>
</div>