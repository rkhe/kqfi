<?php $this->pageTitle = 'King\'s Quality Foods Incorporated : Products'; ?>

<div class="container-fluid first-container" style="margin: 75px 0;">
    <div class="container" style="text-align: center;">
        <h1>Our Menuboard</h1>        
    </div>
    <div class="container" style="text-align: center;">
        <h2>Season's Specials</h2>
        <p style='font-size:18px;'>
            ⭐🎄⭐<br />
            Don't know what to serve for Noche Buena? <br />
            <span class='glyphicon glyphicon-heart'></span>
            Warm your family's hearts with King's Christmas Hams.
            <span class='glyphicon glyphicon-heart'></span><br />
            ⭐🎄⭐
        </p>
        <?php 
        echo $this->Html->image('featurette/Christmas-All.png', 
            array('style' => 'border:none;padding:none;'));
        ?>
        <p style='font-size:18px;text-align: left;margin-left:210px;'>
            <br /><b>For orders and inquiries call our hotline at:</b><br />
            <span class='glyphicon glyphicon-phone-alt' style="color:#f00;"></span> (032) 343 7115 to 18 or (032) 420 6586<br >
            <span class='glyphicon glyphicon-phone' style="color:#f00;"></span> (0917) 430 5358
        </p>
    </div>
    <div class="container" style="text-align: center;">
        <h2>Regular Products</h2>
        <?php 
        $index = 0;
        foreach ($categories as $category) {
            if ($index===3) {
                echo '<br />';
            }
            echo $this->Html->link($this->Html->image($category['ProductCategory']['url'], 
                    array('style' => 'border:none;padding:none;')), 
                    array('controller' => 'products', 'action' => 'index', $category['ProductCategory']['id']), 
                    array('class' => '', 'escape' => false)); 
            $index++;
        } 
        ?>
    </div>
</div>



