<!--defining this is html5-->
<!DOCTYPE html>
<html lang="en">

<!--start of head section-->
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <!--start of title section-->    
  <!-- Title Page-->
  <title>
    Welcome to Note & Todolist
  </title>
  <!--end of title section-->
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <!--     Fonts and icons     -->
  <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="assets/font-awesome.min.css" rel="stylesheet" media="all">

  <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" 
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="http://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
  
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" 
  integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

  <!--  jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.0.943/build/pdf.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

  <!-- Bootstrap Date-Picker Plugin -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
  integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
  
  <!-- FOnt Awsome JS-->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" 
  integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" 
  integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" 
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" 
    crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" 
    crossorigin="anonymous"></script>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" 
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" 
    crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" 
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" 
    crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    
</head>
<!--end of head section-->

<!--start of body section-->
<body>
<!--start of nav part-->
<nav class="navbar navbar-expand-lg navbar-custom py-0">
  <a class="navbar-brand" href="<?php echo base_url(); ?>users/login">N&T</a> <!--echo base_url refers to localhost/cp-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        
            <!-- checks in session data for displaying these part -->
            <?php if(!$this->session->userdata('logged_in')) : ?> 
              <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login<span class="sr-only">(current)</span></a> 
              <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register <span class="sr-only">(current)</span></a> 
            <?php endif; ?>
            <!-- end of if condition-->

            <!-- checks in session data for displaying these part-->
            <!-- start of if condition-->
            <?php if($this->session->userdata('logged_in')) : ?>
                    <a class="nav-link" href="<?php echo base_url(); ?>todo">Tasks<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?php echo base_url(); ?>notebooks">Notebooks<span class="sr-only">(current)</span></a> 
                    <a class="nav-link" href="<?php echo base_url(); ?>notes">Notes<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?php echo base_url(); ?>notes/note_search">View All Notes<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?php echo base_url(); ?>notebooks/add">Add Notebook<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?php echo base_url(); ?>notes/add">Add Note<span class="sr-only">(current)</span></a>                    
                    <a class="nav-link" href="<?php echo base_url(); ?>profile">Profile<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout<span class="sr-only">(current)</span></a>
               
             <?php endif; ?>
             <!-- end of if condition-->
             <a class="nav-link" href="<?php echo base_url(); ?>pages/help">Help<span class="sr-only">(current)</span></a>
        </ul>
      </div>
</nav>
<!--end of nav part-->
<div class = "text text-center">
  <!-- flash message-->
    
    <?php if($this->session->flashdata('user_registered')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('note_added')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('note_added').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('note_updated')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('note_updated').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('notebook_added')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('notebook_added').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('note_deleted')): ?>
      <?php echo '<p class="alert-warning">'.$this->session->flashdata('note_deleted').'</p>'; ?>
    <?php endif; ?>

    <p class="text"><strong><?php if($this->session->flashdata('login_failed')): ?>
      <?php echo '<p class="alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?></strong></p>

    <?php if($this->session->flashdata('user_loggedin')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_logout')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('user_logout').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('notebook_deleted')): ?>
      <?php echo '<p class="alert-warning">'.$this->session->flashdata('notebook_deleted').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('password_updated')): ?>
      <?php echo '<p class="alert-primary">'.$this->session->flashdata('password_updated').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('profile_updated')): ?>
      <?php echo '<p class="alert-primary">'.$this->session->flashdata('profile_updated').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('todo_alert')): ?>
      <?php echo '<p class="alert-primary">'.$this->session->flashdata('todo_alert').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('old_passwordwrong')): ?>
      <?php echo '<p class="alert-danger">'.$this->session->flashdata('old_passwordwrong').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('task_added')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('task_added').'</p>'; ?>
    <?php endif; ?>    

</div>
<!--start of container-fluid class-->
<div class = "wrapper">

<?php if($this->session->userdata('logged_in')): ?> 
  <nav id="sidebar">
    <div class="sidebar-header">
              <h3><u>Pinned notes</u></h3><br />
              <?php foreach((array) $pinn as $pin): ?>
                <li><a href="<?php echo site_url('/notes/'.$pin['slug']); ?>"><?php echo $pin['notename']; ?></a><br /><br />
              <?php endforeach; ?>
    </div>
  </nav>
  <?php endif; ?>