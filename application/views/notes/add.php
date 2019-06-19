<div class="card card-4">
    <div class="card-body">
      <h2 class="text"><?= $title ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('notes/add'); ?>
<div class="form-group">
    <label class="text">Note name</label>
    <input type="text" class="form-control" name="notename" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label class="text">Note detail: </label>
    <textarea id="editor1" class="form-control" name="notedetail" placeholder="Add Body"></textarea>
  </div>
  <div class="form-group">
	  <label class="text">Notebook</label>
	  <select name="notebook_id" class="form-control">
		  <?php foreach($notebooks as $notebook): ?>
		  	<option value="<?php echo $notebook['notebookid']; ?>"><?php echo $notebook['notebookname']; ?></option>
		  <?php endforeach; ?>
	  </select>
  </div>
<div class="form-group">
	  <label>Upload Image</label>
	  <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-warning">Submit</button>
</form>
</div>
</div>