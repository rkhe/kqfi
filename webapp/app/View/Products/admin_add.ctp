<?php $this->pageTitle = 'Administrator : Manage Products'; ?>
<div class="products form">
<?php echo $this->Form->create('Product', array('type' => 'file')); ?>
	<h2><?php
        if (isset($edit) && $edit)
            echo __('Edit Product');
        else
            echo __('Add Product');
        ?>
    </h2>
	<?php
		echo $this->Form->input('product_category_id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
                echo $this->Form->input('is_active');
        echo '<br />';
        echo $this->Form->input('url', array('type' => 'hidden', 'name' => 'data[Product][url_orig]'));
        echo $this->Form->input('url', array('type' => 'file'));
        if (isset($product)) {
            echo '<div style="margin:10px 0px 0px 150px;">' . $this->Html->image('products/' . $product['Product']['url'],
                    array('alt' => '', 'title' => '', 'border' => '0',
                        'style' => 'width:100%;max-width:350px;padding:5px;border:1px solid #ccc;')) . '</div>';
        }
        echo $this->Form->submit('Submit', array('class' => 'buttonStyle2'));
	?>
<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Product Categories'), array('controller' => 'product_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Category'), array('controller' => 'product_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
