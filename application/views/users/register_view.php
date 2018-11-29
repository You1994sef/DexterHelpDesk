

<h3> User Registration</h3>
<br>

<?php $attributes = array('id'=>'register_form', 'class'=>'form_horizontal'); ?>
<?php echo validation_errors("<span class='label label-danger'>Warning</span> "); ?>

<?php echo form_open('users/register', $attributes); ?>


<div class="form-group">
	
<?php echo form_label('First Name'); ?>

<?php 
$data = array(

	'class' => 'form-control',
	'name' => 'first_name',
	'placeholder' => 'Enter First Name'
)
 ?>
<?php echo form_input($data); ?>
</div>

<div class="form-group">
	
<?php echo form_label('Last Name'); ?>

<?php 
$data = array(

	'class' => 'form-control',
	'name' => 'last_name',
	'placeholder' => 'Enter Last Name'
)
 ?>
<?php echo form_input($data); ?>
</div>

<div class="form-group">
	
<?php echo form_label('Email Aaddress'); ?>

<?php 
$data = array(

	'class' => 'form-control',
	'name' => 'email',
	'placeholder' => 'Enter Your Email',
    'type' => 'email'
)
 ?>
<?php echo form_input($data); ?>
</div>

<div class="form-group">
	
<?php echo form_label('Username'); ?>

<?php 
$data = array(

	'class' => 'form-control',
	'name' => 'username',
	'placeholder' => 'Enter Username'
)
 ?>
<?php echo form_input($data); ?>
</div>

<div class="form-group">
	
<?php echo form_label('Password'); ?>

<?php 
$data = array(

	'class' => 'form-control',
	'name' => 'password',
	'placeholder' => 'Enter Password'
)
 ?>
<?php echo form_password($data); ?>
</div>

<div class="form-group">
	
<?php echo form_label('Confirm Password'); ?>

<?php 
$data = array(

	'class' => 'form-control',
	'name' => 'confirm_password',
	'placeholder' => 'Confirm Password'
)
 ?>
<?php echo form_password($data); ?>
</div>

<div class="form-group">

<?php 
$data = array(

	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => 'Submit'
)
 ?>
<?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>
