<?php $this->pageTitle = 'King\'s Quality Foods Incorporated : Posts (News, Promos and Events)'; ?>

<div class="postCategories form">
<?php echo $this->Form->create('PostCategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Post Category'); ?></legend>
	<?php
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Post Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
