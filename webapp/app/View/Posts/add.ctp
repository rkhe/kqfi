<?php $this->pageTitle = 'King\'s Quality Foods Incorporated : Posts (News, Promos and Events)'; ?>

<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('post_category_id');
		echo $this->Form->input('title');
		echo $this->Form->input('body');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Post Categories'), array('controller' => 'post_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post Category'), array('controller' => 'post_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
