<!--this is a page of edit note where user will edit their note-->
<!--start of card section-->
<div class="card card-4">
    <div class="card-body">
    <!--this shows title of this page-->
      <h2 class="text"><?= $title ?></h2>
      <!-- if any errors occurs, it is hown in this part--> 
      <?php echo validation_errors(); ?>

      <!--opens form-->
      <?php echo form_open('notes/update'); ?>
          <input type="Hidden" name="id" value="<?php echo $note['noteid'];?>">
      <div class="form-group">
          <label class="text">Note name</label>
          <!--here note name is displayed-->
          <input type="text" class="form-control" name="notename" placeholder="Add Title" value="<?php echo $note['notename']; ?>" >
        </div>
        <div class="form-group">
          <label class="text">Note detail: </label>
          <!--here note detail is displayed-->
          <textarea id="editor1" class="form-control" name="notedetail" placeholder="Add Body"><?php echo $note['notedetail']; ?></textarea>
        </div>
        <div class="form-group">
          <label class="text">Notebook</label>
          <select name="notebook_id" class="form-control">
          <!--here all created notebook is dispalyed in droplist option-->
          <!--start of foreach-->
            <?php foreach($notebooks as $notebook): ?>
              <option value="<?php echo $notebook['notebookid']; ?>"><?php echo $notebook['notebookname']; ?></option>
            <?php endforeach; ?>
            <!-- end of for each-->
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
<!--end of card section-->