<h1>Projects</h1>
<a href="<?php echo base_url(); ?>projects/create" class="btn btn-primary pull-right"> Create project </a>

<table class="table table-hover">


<thead>
	<tr>
		<th>Project ID</th>
		<th>Project Name</th>
		<th>Project Description</th>
		<th>Remarks</th>

	</tr>
</thead>
<tbody>

		<?php foreach($projects as $project): ?>
			<tr>
		<?php echo "<td>" . $project->id . "</td>"; ?>
		<?php echo "<td><a href='". base_url() ."projects/display/". $project->id ."'' >" . $project->project_name . "</a></td>"; ?>
		<?php echo "<td>" . $project->project_body . "</td>"; ?>
		<?php echo "<td>" . $project->project_note . "</td>"; ?>
		</tr>
	    <?php endforeach; ?>
	
</tbody>

</table>