<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      
  <!-- Title Page-->
  <title>
    Welcome to Note & Todolist
  </title>

  <!--     Fonts and icons     -->
  <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="assets/font-awesome.min.css" rel="stylesheet" media="all">

  <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="http://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
  
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

  <!--  jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

  <!-- Bootstrap Date-Picker Plugin -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
  
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-custom py-0">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">N&T</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="<?php echo base_url(); ?>todo">Todo<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?php echo base_url(); ?>notebooks">Notebooks<span class="sr-only">(current)</span></a> 
                    <a class="nav-link" href="<?php echo base_url(); ?>notes">Notes<span class="sr-only">(current)</span></a> 
                    <a class="nav-link" href="<?php echo base_url(); ?>notebooks/add">Add Notebook<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?php echo base_url(); ?>notes/add">Add Note<span class="sr-only">(current)</span></a>                    
                    <a class="nav-link" href="<?php echo base_url(); ?>profile">Profile<span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout<span class="sr-only">(current)</span></a>
                      <form class="form-inline my-2 my-lg-0" action="<?php echo base_url(); ?>notes/note_search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="search" name="search" method="POST">
                          <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
                      </form>               
             <?php endif; ?>
             <!-- end of if condition-->
        </ul>
      </div>
</nav>

<div class = "container-fluid">

  <!-- flash message-->
    <center>
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

  </center>
