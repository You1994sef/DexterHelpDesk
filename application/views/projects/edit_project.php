

<h3> Edit Project</h3>
<br>

<?php $attributes = array('id'=>'edit_form', 'class'=>'form_horizontal'); ?>
<?php echo validation_errors("<span class='label label-danger'>Warning</span> "); ?>

<?php echo form_open('projects/edit', $attributes); ?>


<div class="form-group">
	
<?php echo form_label('Project Name'); ?>

<?php 
$data = array(

	'class' => 'form-control',
	'name' => 'project_name',
	'value' => ''
);
 ?>
<?php echo form_input($data); ?>
</div>

<div class="form-group">
	
<?php echo form_label('Description'); ?>

<?php 
$data = array(

	'class' => 'form-control',
	'name' => 'project_body',
	'value' => ''
);
 ?>
<?php echo form_textarea($data); ?>
</div>

<div class="form-group">
	
<?php echo form_label('Remarks'); ?>

<?php 
$data = array(

	'class' => 'form-control',
	'name' => 'project_note',
	'value' => ''
);
 ?>
<?php echo form_textarea($data); ?>
</div>

<div class="form-group">

<?php 
$data = array(

	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => 'Update'
)
 ?>
<?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>
