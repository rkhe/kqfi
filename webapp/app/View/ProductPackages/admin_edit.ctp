<div class="productPackages form">
<?php echo $this->Form->create('ProductPackage'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Product Package'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('quantity');
		echo $this->Form->input('quantity_unit');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductPackage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProductPackage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Product Packages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
