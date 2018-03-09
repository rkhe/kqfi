<?php $this->pageTitle = 'Administrator : Manage Product Packages'; ?>
<div class="productPackages form">
<?php echo $this->Form->create('ProductPackage'); ?>
    <h2><?php echo __('Add Product Package'); ?></h2>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('quantity');
		echo $this->Form->input('quantity_unit');
		echo $this->Form->input('price');
        echo '<br />';
        echo $this->Form->submit('Submit', array('class' => 'buttonStyle2'));
	?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Product Packages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
