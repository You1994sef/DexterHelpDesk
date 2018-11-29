<div class="col-xs-9">


	<h1><?php echo $project_data->project_name; ?></h1>
	<p> Date: <?php echo $project_data->date_created;?></p>
	<hr>
<h3>Description</h3>
		<p><?php echo $project_data->project_body ; ?></</p>
		<hr>
		<h4>Remarks</h4>
		<p><?php echo $project_data->project_note ; ?></p>

</div>
<div class="col-xs-3 pull-right">
	<br>

<ul class="list-group">
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Action
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Create Task</a></li>
    <li><a href="<?php echo base_url(); ?>projects/edit"> Edit project </a></li>
    <li><a href="#">Delete Project</a></li>
  </ul>
</div>
</ul>
</div>