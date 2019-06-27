<!--this is add page of note where user can add notes-->
<!--start of card section-->
<div class="card card-4">
    <div class="card-body">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <i class="fas fa-align-left"></i>
                <span>Toggle Pinned Notes</span>
            </button>

        </div>
    </nav>
    <!--this part shown title of current page-->
      <h2 class="text"><?= $title ?></h2>
 <!-- if any errors occurs, it is hown in this part-->     
 <div class="text text-danger text-center"><strong><?php echo validation_errors(); ?>
  </strong></div>
<!--opens form supporting images-->
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
    <!--start of foreach in which all notebook of that particular user is shown in dropdown option-->
		  <?php foreach($notebooks as $notebook): ?>
		  	<option value="<?php echo $notebook['notebookid']; ?>"><?php echo $notebook['notebookname']; ?></option>
		  <?php endforeach; ?>
      <!--end of foreach-->
	  </select>
  </div>
  <!--a div for uploading images for note-->
<div class="form-group">
	  <label>Upload Image</label>
	  <input type="file" name="userfile" size="20">
  </div>
  <button type="submit" class="btn btn-warning">Submit</button>
</form>
</div>
</div>
<!--end of card section-->