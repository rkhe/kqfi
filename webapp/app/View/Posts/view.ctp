<?php $this->pageTitle = 'King\'s Quality Foods Incorporated : Posts (News, Promos and Events)'; ?>
<style type="text/css">
		#nav {top: 209px !important;}
</style>

<div class="slideshow" style="height:225px;">
	<?php echo $this->Html->image('banner_page_promotion01.png', array('alt' => '', 'class' => 'wrapper hide banner')); ?>
	<?php echo $this->Html->image('banner_page_promotion02.png', array('alt' => '', 'class' => 'wrapper hide banner')); ?>
	<?php echo $this->Html->image('banner_page_promotion03.png', array('alt' => '', 'class' => 'wrapper hide banner')); ?>
	<?php echo $this->Html->image('banner_page_promotion04.png', array('alt' => '', 'class' => 'wrapper hide banner')); ?>
	<?php echo $this->Html->image('banner_page_promotion05.png', array('alt' => '', 'class' => 'wrapper hide banner')); ?>
</div>

<br style="clear:both;" />
<h2 style="margin-bottom:0px;"><?php echo __('News, Promotions and Events'); ?></h2>
<span class="gray sml">Breadcrumbs: <?php echo $this->Html->link($post['PostCategory']['title'], array('controller' => 'posts', 'action' => 'index')); ?>
&nbsp; / <?php echo h($post['Post']['title']); ?></span>
<br /><br />
<h2 style="margin-bottom:0px;"><?php echo h($post['Post']['title']); ?></h2>
<span class="gray sml">Created on: <?php echo h($post['Post']['created']); ?></span><br /><br />
<div style="width:1000px">
    <div class="frht" style="padding-right: 25px;">
        <?php if ($post['Post']['image_url'] != ''): ?>
            <?php echo $this->Html->image('posts/' . $post['Post']['image_url'], array('style' => '', 'class' => 'frht')); ?>
        <?php endif; ?>
    </div>
    <div class="flft" style="width: 600px;">
	    <?php echo $post['Post']['body']; ?>
    </div>
    <br class="clear" style="clear:both;" />
    <br /><br /><br />
</div>
