<?php $this->pageTitle = 'Administrator : Manage Posts'; ?>
<div class="posts view">
<h2><?php echo __('Post'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?>:</dt>
		<dd>
			<?php echo h($post['Post']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Category'); ?>:</dt>
		<dd>
			<?php echo $this->Html->link($post['PostCategory']['title'], array('controller' => 'post_categories', 'action' => 'view', $post['PostCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?>:</dt>
		<dd>
			<?php echo h($post['Post']['title']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Slug'); ?>:</dt>
        <dd>
            <?php echo h($post['Post']['slug']); ?>
            &nbsp;
        </dd>
		<dt><?php echo __('Body'); ?>:</dt>
		<dd>
			<?php echo h($post['Post']['body']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Is Show'); ?>:</dt>
        <dd>
            <?php echo ($post['Post']['is_show']) ? "Yes" : "No"; ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Image'); ?>:</dt>
        <dd>
            <?php echo $this->Html->image('posts/' . $post['Post']['image_url'], array('border' => '0')); ?>
            &nbsp;
        </dd>
		<dt><?php echo __('Created'); ?>:</dt>
		<dd>
			<?php echo h($post['Post']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?>:</dt>
		<dd>
			<?php echo h($post['Post']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Post Categories'), array('controller' => 'post_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post Category'), array('controller' => 'post_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
