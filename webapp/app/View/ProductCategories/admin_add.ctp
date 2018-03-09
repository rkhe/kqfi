<?php $this->pageTitle = 'King\'s Quality Foods Incorporated : Manage Product Categories'; ?>
<div class="productCategories form">
<?php echo $this->Form->create('ProductCategory', array('type' => 'file')); ?>
    <h2><?php
            if (isset($edit) && $edit)
                echo __('Edit Product Category');
            else
                echo __('Add Product Category');
        ?></h2>
	<?php
		echo $this->Form->input('title');
        echo $this->Form->input('is_active');
        echo $this->Form->input('url', array('type' => 'hidden', 'name' => 'data[ProductCategory][url_orig]'));
        echo $this->Form->input('url', array('type' => 'file'));
        if (isset($productCategory)) {
            echo '<div style="margin:10px 0px 0px 150px;">' . $this->Html->image('products/' . $productCategory['ProductCategory']['url'],
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

		<li><?php echo $this->Html->link(__('List Product Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
