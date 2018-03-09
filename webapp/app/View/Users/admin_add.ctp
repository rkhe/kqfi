<?php $this->pageTitle = 'Administrator : Manage Users'; ?>
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<h2><?php echo __('Admin Add User'); ?></h2>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		//echo $this->Form->input('last_login');
        echo '<br />';
        echo $this->Form->submit('Submit', array('class' => 'buttonStyle2'));
	?>
<?php echo $this->Form->end(); ?>
</div>