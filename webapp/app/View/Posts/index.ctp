<?php $this->pageTitle = 'King\'s Quality Foods Incorporated : Posts (News, Promos and Events)'; ?>
<style type="text/css">
		#nav {top: 209px !important;}
</style>

<div class="slideshow" style="height:225px;">
    <?php
        for($i = 0; $i < count($banners); $i++) {
            echo $this->Html->image('posts/' . $banners[$i]['Post']['image_url'], array('alt' => '', 'class' => 'wrapper hide banner'));
        }
    ?>
</div>

<br style="clear:both;" />
<h2><?php echo __('News, Promotions and Events'); ?></h2>
<br />
<div style="width: 600px;">
<?php
    //pr($posts);
    foreach ($posts as $post): ?>
    <?php if ($post['Post']['is_show']) : ?>
	<div style="border-bottom: 1px solid #efefef;padding-bottom:5px;">
		<span class="bold"><?php echo h($post['Post']['title']); ?></span><br />
		<span class="gray sml">Created on: <?php echo h($post['Post']['created']); ?></span><br /><br />
		<span><?php echo $post['Post']['slug']; ?></span><br />
		<span style="float:right"><?php echo $this->Html->link('.: Read', '/posts/view/' . ($post['Post']['id']), array('class' => 'learn')); ?></span>
		<br class="clear" />
	</div><br /><br />
    <?php endif; ?>
<?php endforeach; ?>
</div>
<br /><br /><br /><br />
