<?php $this->pageTitle = 'Administrator : Manage Product Packages'; ?>
<div class="productPackages view">
<h2><?php echo __('Product Package'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productPackage['ProductPackage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productPackage['Product']['title'], array('controller' => 'products', 'action' => 'view', $productPackage['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($productPackage['ProductPackage']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity Unit'); ?></dt>
		<dd>
			<?php echo h($productPackage['ProductPackage']['quantity_unit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($productPackage['ProductPackage']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productPackage['ProductPackage']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productPackage['ProductPackage']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Package'), array('action' => 'edit', $productPackage['ProductPackage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product Package'), array('action' => 'delete', $productPackage['ProductPackage']['id']), null, __('Are you sure you want to delete # %s?', $productPackage['ProductPackage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Packages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Package'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
