<h3 class="bg-success text-center">
<?php if($this->session->flashdata('login_success')): ?>
<?php echo $this->session->flashdata('login_success'); ?>
<?php endif; ?>
 </h3>

 <h4 class="bg-success text-center">
<?php if($this->session->flashdata('user_registered')): ?>
<?php echo $this->session->flashdata('user_registered'); ?>
<?php endif; ?>

 </h4>




<h3 class="bg-danger text-center">

 <?php if($this->session->flashdata('no_access')): ?>
<?php echo $this->session->flashdata('no_access'); ?>
<?php endif; ?>

<?php if($this->session->flashdata('login_failed')): ?>
<?php echo $this->session->flashdata('login_failed'); ?>
<?php endif; ?>

 </h3>