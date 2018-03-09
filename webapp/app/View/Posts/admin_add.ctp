<?php $this->pageTitle = 'Administrator : Manage Posts'; ?>

<div class="posts form">
<?php echo $this->Form->create('Post', array('type' => 'file')); ?>
    <h2><?php
            if (isset($edit) && $edit)
                echo __('Edit Post');
            else
                echo __('Add Post');
        ?></h2>
	<?php
		echo $this->Form->input('post_category_id');
		echo $this->Form->input('startdate');
		echo $this->Form->input('enddate');
		echo $this->Form->input('title');
        echo $this->Form->input('slug');
		echo $this->Form->input('body', array('style' => 'min-width:100px;min-height:100px;width:350px;height:150px;max-width:700px;max-height:450px;'));
        echo $this->Form->input('is_show');
        echo '<br />';
        echo $this->Form->input('image_url', array('type' => 'hidden', 'name' => 'data[Post][image_url_orig]'));
        echo $this->Form->input('image_url', array('type' => 'file'));
        if (isset($post)) {
        echo '<div style="margin:10px 0px 0px 150px;">' . $this->Html->image('posts/' . $post['Post']['image_url'],
                array('alt' => '', 'title' => '', 'border' => '0',
                    'style' => 'width:100%;max-width:350px;padding:5px;border:1px solid #ccc;')) . '</div>';
        }
        echo '<br />';
        echo $this->Form->submit('Submit', array('class' => 'buttonStyle2'));
	?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Post Categories'), array('controller' => 'post_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post Category'), array('controller' => 'post_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
