<?php $this->pageTitle = 'Administrator : Manage Posts'; ?>
<div class="posts index">
	<h2><?php echo __('Posts'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="grid">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('post_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
            <th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('body'); ?></th>
            <th><?php echo $this->Paginator->sort('is_show'); ?></th>
            <th><?php echo $this->Paginator->sort('image_url'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($post['PostCategory']['title'], array('controller' => 'post_categories', 'action' => 'view', $post['PostCategory']['id'])); ?>
		</td>
		<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
        <td><?php echo h(substr($post['Post']['slug'], 0, 50)); ?>&nbsp;...</td>
		<td><?php echo h(substr($post['Post']['body'], 0, 50)); ?>&nbsp;...</td>
        <td><?php echo ($post['Post']['is_show'] == 1) ? "Yes" : "No"; ?>&nbsp;</td>
        <td><?php echo h(substr($post['Post']['image_url'], 0, 50)); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Post Categories'), array('controller' => 'post_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post Category'), array('controller' => 'post_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
