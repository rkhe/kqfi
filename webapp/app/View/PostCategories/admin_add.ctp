<?php $this->pageTitle = 'Administrator : Manage Post Categories'; ?>
<div class="postCategories form">
<?php echo $this->Form->create('PostCategory'); ?>
	<h2><?php echo __('Admin Add Post Category'); ?></h2>
	<?php
		echo $this->Form->input('title');
        echo '<br />';
        echo $this->Form->submit('Submit', array('class' => 'buttonStyle2'));
	?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Post Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
