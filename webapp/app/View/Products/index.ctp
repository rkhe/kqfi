<?php $this->pageTitle = 'King\'s Quality Foods Incorporated : Products'; ?>

<div class="container-fluid first-container bg-red">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><?=$this->Html->link('Home', $this->webroot);?></li>
                    <li><?= $this->Html->link('Menuboard', array('controller' => 'productCategories', 'action' => 'index')); ?></li>
                    <li class="bold"><?php echo h($currentCategory['ProductCategory']['title']); ?></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 white">
                <h1 style="margin:5px 0px;">Our <?php echo h($currentCategory['ProductCategory']['title']); ?></h1>
                <span style="margin-left:100px;">...and this is the King!</span><br /><br />
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-darkgray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="submenuitem white">
                    <?php foreach ($categories as $category): ?>
                        <li>
                            <?php if ($category['ProductCategory']['url'] != ''): ?>
                                <?php echo $this->Html->link($category['ProductCategory']['title'], '/products/index/' . $category['ProductCategory']['id'], array('escape' => false)); ?>
                            <?php else: ?>
                                <?php
                                echo $this->Html->link($this->Html->image('no_image.png', array(
                                            'class' => 'fade pointer roundedBorder',
                                            'title' => $category['ProductCategory']['title'],
                                            'border' => '0',
                                            'style' => 'height:128px')), '/products/index/' . $category['ProductCategory']['id'], array('escape' => false));
                                ?>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid first-container">
    <div class="container">

        <?php foreach ($products as $product): ?>
            <div class="row ">
                <div class="col-md-2">
                    <?php if ($product['Product']['url'] != ''): ?>
                         <!--data-lightbox="roadtrip"-->
                        <?=$this->Html->link($this->Html->image('products/' . $product['Product']['url'], array('alt' => '', 'class' => 'thumbme')),
                                '../img/products/'.$product['Product']['url'], array('data-lightbox'=>'roadtrip' ,'escape'=>false)); ?>
                        <?php //echo $this->Html->image('products/' . $product['Product']['url'], array('alt' => '', 'class' => 'thumbme', 'border' => '0')); ?>
                    <?php else: ?>
                        <?php echo $this->Html->image('no_image.png', array('alt' => '', 'class' => 'thumbme', 'border' => '0')); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <h3><?php echo $product['Product']['title']; ?></h3>
                    <div class="flft">
                        <?php echo h($product['Product']['description']); ?><br />

                        <?php
                        if ($isLoggedIn == 1) {
                            echo $this->Html->link('Edit', '/admin/Products/edit/' . $product['Product']['id'], array('escape' => false));
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <table class="tbprice" cellpadding="0" cellspacing="0" style="width:200px;">
                        <tr>
                            <th>Available At</th>
                            <th>Notes</th>
                        </tr>
                        <?php foreach ($product['ProductPackage'] as $package): ?>
                            <tr>
                                <td><?php echo h(number_format($package['quantity'], 0)); ?>&nbsp;<?php echo h($package['quantity_unit']); ?></td>
                                <?php //if(number_format($package['price'], 2) > 0) { ?>
            <!--		                    <td>₱ <?php echo h(number_format($package['price'], 2)); ?></td>-->
                                <?php //} else { ?>
                                <td><?php echo h($package['remarks']); ?></td>
                                <?php //} ?>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        <?php endforeach; ?>



        <div class="row hide">
            <div class="col-md-5">
                <?= $this->Html->image('featurette/featurette-60years.png', array('alt' => '60 Years', 'style' => 'width:100%', 'class' => 'featurette-image img-responsive center-block img-circle')); ?>
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">60 Years<span class="text-muted"> of quality and affordability!</span></h2>
                <p class="lead">
                <p><?= $this->Html->link('Our Vision &raquo;', array('controller' => 'pages', 'action' => 'about'), array('class' => 'btn btn-default', 'escape' => false)); ?>
                    <?= $this->Html->link('Our Mission &raquo;', array('controller' => 'pages', 'action' => 'about'), array('class' => 'btn btn-default', 'escape' => false)); ?>
                    <?= $this->Html->link('Our Core Values &raquo;', array('controller' => 'pages', 'action' => 'about'), array('class' => 'btn btn-default', 'escape' => false)); ?></p>
                </p>
            </div>
        </div>
    </div>
</div>
















<div class="hide">
    <br style="clear:both;" />
    <div class="slideshow" style="height:370px;">
        <?php
        //pr($banners);
        for ($i = 0; $i < count($banners); $i++) {
            echo $this->Html->image('posts/' . $banners[$i]['Post']['image_url'], array('alt' => '', 'class' => 'wrapper  banner'));
        }
        ?>
    </div>
    <!--<span style="float:left;font: Normal 28px Arial;color:#333333;margin: 15px 0px 0px 0px;">Our Products</span>
    <br style="clear:both;" />
    <div style="text-align:left;"><span style="font-weight:normal;margin-bottom:25px;">Select from the different categories below:</span></div>
    <br style="clear:both;">-->
    <div style="margin-left:5%;display: none">
        <div style="float:left;padding-right:5px;">
            <?php echo $this->Html->image('arrow_left.png', array('title' => 'Click for more categories', 'class' => 'arrow fade', 'onclick' => 'kqfi_products.arrowClick("right")')); ?>
            <?php echo $this->Html->image('separator_left.png', array('alt' => '', 'style' => 'float:left;margin-top:50px;')); ?>
        </div>
        <div style="float:left;width:800px;overflow:hidden;margin-top:30px;">
            <div style="white-space:nowrap;position:relative;left:0px;" id="divCategories">
                <?php foreach ($categories as $category): ?>
                    <li style="display:inline;">
                        <?php if ($category['ProductCategory']['url'] != ''): ?>
                            <?php echo $this->Html->link($this->Html->image('products/' . $category['ProductCategory']['url'], array('class' => 'fade pointer category_sm', 'title' => $category['ProductCategory']['title'], 'border' => '0')), '/products/index/' . $category['ProductCategory']['id'], array('escape' => false)); ?>
                        <?php else: ?>
                            <?php
                            echo $this->Html->link($this->Html->image('no_image.png', array(
                                        'class' => 'fade pointer roundedBorder',
                                        'title' => $category['ProductCategory']['title'],
                                        'border' => '0',
                                        'style' => 'height:128px')), '/products/index/' . $category['ProductCategory']['id'], array('escape' => false));
                            ?>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </div>
        </div>
        <div style="float:left;padding-left:5px;">
            <?php echo $this->Html->image('separator_right.png', array('alt' => '', 'style' => 'float:left;margin-top:50px;')); ?>
            <?php echo $this->Html->image('arrow_right.png', array('title' => 'Click for more categories', 'class' => 'arrow fade', 'onclick' => 'kqfi_products.arrowClick("left")')); ?>
        </div>
    </div>

    <div style="margin: 15px 0px 0px 0px;text-align: center">
        <b style="">Other products: </b>
        <?php
        $endArray = end($categories);
        foreach ($categories as $category):
            ?>
            <?php echo $this->Html->link($category['ProductCategory']['title'], '/products/index/' . $category['ProductCategory']['id'] . '#navigation', array('escape' => false)); ?>
            <?php if ($endArray !== $category): ?>
                &nbsp;|&nbsp;
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <hr style="width:75%;margin-bottom: 25px;border-color: #efefef;">

    <div style="">
        <h1>Our <?php echo h($currentCategory['ProductCategory']['title']); ?></h1><br />


        <?php if (count($products) == 0): ?>
            <div style="height:200px;"><span style="font-style:italic">No results found.</span></div>
        <?php endif; ?>

        <?php foreach ($products as $product): ?>
            <div id="item">
                <div class="flft" style="width:150px;height:150px;margin-right:25px;text-align: center;">
                    <?php if ($product['Product']['url'] != ''): ?>
                        <?php echo $this->Html->image('products/' . $product['Product']['url'], array('alt' => '', 'style' => 'max-width:145px;max-height:145px;vertical-align:middle;', 'border' => '0')); ?>
                    <?php else: ?>
                        <?php echo $this->Html->image('no_image.png', array('alt' => '', 'style' => 'width:150px;', 'border' => '0')); ?>
                    <?php endif; ?>
                </div>
                <div class="flft description" style="width:450px;">
                    <span class="bold lg"><?php echo $product['Product']['title']; ?></span><br />
                    <div class="flft">
                        <?php echo h($product['Product']['description']); ?><br />

                        <?php
                        if ($isLoggedIn == 1) {
                            echo $this->Html->link('Edit', '/admin/Products/edit/' . $product['Product']['id'], array('escape' => false));
                        }
                        ?>
                    </div>
                </div>
                <div class="frht" style="">
                    <table class="tbprice" cellpadding="0" cellspacing="0" style="width:200px;">
                        <tr>
                            <th>Available At</th>
                            <th>Notes</th>
                        </tr>
                        <?php foreach ($product['ProductPackage'] as $package): ?>
                            <tr>
                                <td style="text-align: center;"><?php echo h(number_format($package['quantity'], 0)); ?>&nbsp;<?php echo h($package['quantity_unit']); ?></td>
                                <?php //if(number_format($package['price'], 2) > 0) { ?>
        <!--		                    <td>₱ <?php echo h(number_format($package['price'], 2)); ?></td>-->
                                <?php //} else { ?>
                                <td style="text-align: center;"><?php echo h($package['remarks']); ?></td>
                                <?php //} ?>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div><br />
        <?php endforeach; ?>
    </div>
    <br style="clear:both" />

    <hr style="width:75%;margin-bottom: 0px;border-color: #efefef;">
    <div style="margin: 15px 0px 0px 0px;text-align: center">
        <b style="">Other products: </b>
        <?php
        $endArray = end($categories);
        foreach ($categories as $category):
            ?>
            <?php echo $this->Html->link($category['ProductCategory']['title'], '/products/index/' . $category['ProductCategory']['id'] . '#navigation', array('escape' => false)); ?>
            <?php if ($endArray != $category): ?>
                &nbsp;|&nbsp;
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <br /><br /><br />
</div>
