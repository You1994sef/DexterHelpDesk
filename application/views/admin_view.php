<h2>
<?php if($this->session->userdata('username')): ?>
<?php echo 'Hello ' . $this->session->userdata('username'); ?>
<?php endif; ?>
</h2>