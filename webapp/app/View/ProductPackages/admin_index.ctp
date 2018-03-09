<?php $this->pageTitle = 'Administrator : Manage Product Packages'; ?>
<div class="productPackages index">
	<h2><?php echo __('Product Packages'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
            <th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($productPackages as $productPackage): ?>
	<tr>
		<td><?php echo h($productPackage['ProductPackage']['id']); ?>&nbsp;</td>
		<td>
			<?php //echo $this->Html->link($productPackage['Product']['title'], array('controller' => 'products', 'action' => 'view', $productPackage['Product']['id'])); ?>
            <?php echo $productPackage['Product']['title']; ?>
		</td>
		<td style="text-align: right"><?php echo h(number_format($productPackage['ProductPackage']['quantity'], 1)); ?>&nbsp;</td>
		<td style="text-align: center"><?php echo h($productPackage['ProductPackage']['quantity_unit']); ?>&nbsp;</td>
		<td style="text-align: right"><?php echo h(($productPackage['ProductPackage']['price'] != '') ? 'PhP '.number_format($productPackage['ProductPackage']['price'], 2) : ''); ?>&nbsp;</td>
        <td><?php echo h($productPackage['ProductPackage']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($productPackage['ProductPackage']['created']); ?>&nbsp;</td>
		<td><?php echo h($productPackage['ProductPackage']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productPackage['ProductPackage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productPackage['ProductPackage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productPackage['ProductPackage']['id']), null, __('Are you sure you want to delete # %s?', $productPackage['ProductPackage']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ' '));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Product Package'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
