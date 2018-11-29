<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">Dexter Helpdesk</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo base_url();?>"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a></li>
        <?php if($this->session->userdata('logged_in')): ?>
        <li><a href="<?php echo base_url();?>projects"><i class="fa fa-copy"></i> Projects</a></li>
        <?php endif; ?>
        <li><a href="#"><i class="fa fa-info-circle"></i></a></li>
        

          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>users/register"><i class="fa fa-user-plus"></i> Register</a></li>
        <?php if($this->session->userdata('logged_in')): ?>
        <li><a href="<?php echo base_url();?>users/logout"><i class="fa fa-sign-out-alt"></i>

        Logout</a></li>
        <?php endif; ?>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
		<div class="col-xs-3">

			<?php $this->load->view('users/login_view'); ?>
			






		</div>

		<div class="col-xs-9">
			<?php $this->load->view($main_view);  ?>
			




		</div>

	</div>
    
</body>
</html>