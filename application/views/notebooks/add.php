<div class="card card-4">
    <div class="card-body">
        <h2 class="text"><?= $title ;?></h2>

        <?php echo validation_errors(); ?>
        <?php echo form_open_multipart('notebooks/add'); ?>
            <div class="form-group">
            <label class="text">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <button type="submit" class="btn btn-warning">Submit</button>

        </form>
    </div>
</div>  