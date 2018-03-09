<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

?>
<?php $this->pageTitle = 'King\'s Quality Foods Incorporated : Administrator'; ?>

<br class="clear" />
<div style="">
    <h1>Administrator Home</h1>
    <?php echo $this->Html->link('Users', '/admin/users/index', array('class' => 'adminLink')); ?>

    <?php echo $this->Html->link('Post Categories', '/admin/PostCategories/index', array('class' => 'adminLink')); ?>
    <?php echo $this->Html->link('Posts (News, Events and Promotions)', '/admin/Posts/index', array('class' => 'adminLink')); ?><br />

    <?php echo $this->Html->link('Products Categories', '/admin/ProductCategories/index', array('class' => 'adminLink')); ?><br />
    <?php echo $this->Html->link('Products', '/admin/Products/index', array('class' => 'adminLink')); ?><br />

    <?php echo $this->Html->link('Products Packages', '/admin/ProductPackages/index', array('class' => 'adminLink')); ?><br />
</div>
