<?php $this->pageTitle = 'About Us'; ?>

<div class="container-fluid first-container bg-gradient-diagonal-slash-silver">
    <div class="container">
        <div class="row ">
            <div class="col-md-5">
                <?= $this->Html->image('featurette/featurette-60years.png', array('alt' => '60 Years', 'style' => 'width:100%', 'class' => 'featurette-image img-responsive center-block img-circle')); ?>
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">60 Years<span class="text-muted"> of quality and affordability!</span></h2>
                <p class="lead">
                <p><?= $this->Html->link('Our Vision &raquo;', array('controller' => 'pages', 'action' => 'about#vision'), array('class' => 'btn btn-default', 'escape' => false)); ?>
                    <?= $this->Html->link('Our Mission &raquo;', array('controller' => 'pages', 'action' => 'about#mission'), array('class' => 'btn btn-default', 'escape' => false)); ?>
                    <?= $this->Html->link('Our Core Values &raquo;', array('controller' => 'pages', 'action' => 'about#core'), array('class' => 'btn btn-default', 'escape' => false)); ?></p>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="vision" class="container-fluid bg-gradient-diagonal-slash-gold">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="featurette-heading">Our Vision</h2>
                <p class="lead" style="color:white">
                    <?= $this->Html->image('icon_quote_red.png', array('alt' => '', 'style' => '')); ?>
                    To be the Top 3 meat processing company offering premium quality and affordable products available in major markets in Visayas and Mindanao by 2020.
                </p>
            </div>
            <div class="col-md-5">
                <?= $this->Html->image('phillipines.png', array('alt' => '60 Years', 'style' => 'width:100%', 'class' => 'featurette-image img-responsive center-block img-circle')); ?>
            </div>
        </div>
    </div>
</div>

<div id="mission" class="container-fluid bg-red">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="featurette-heading white" style="margin-top:50px">Our Mission</h2>
                <p class="lead white">
                    <?= $this->Html->image('icon_quote_yellow.png', array('alt' => '', 'style' => '')); ?>
                    We shall achieve our Vision by:<br />
                <ul class="white" style="list-style-type:none;">
                    <li style="font-size:130%">
                        <?= $this->Html->image('icon_checkbox_checked.png', array('style' => 'width:5%')); ?>
                        Consistently satisfying our customers with the highest quality and best tasting meat 
                        and food related products suited for many generations through multi-branding</li>
                    <li style="font-size:130%">
                        <?= $this->Html->image('icon_checkbox_checked.png', array('style' => 'width:5%')); ?>
                        Continuously growing our strong distribution network of branches and presence in 
                        the HRI (hotels, restaurants and institutions) and Modern Trade Markets (supermarkets)   
                    </li>
                    <li style="font-size:130%">
                        <?= $this->Html->image('icon_checkbox_checked.png', array('style' => 'width:5%')); ?>
                        Committing to efficiency and constantly improving processes with our highly 
                        engaged and well trained workforce.
                    </li>
                </ul>
                <br /><br />
                </p>
            </div>
        </div>
    </div>
</div>

<div id="core" class="container-fluid bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2 class="featurette-heading" style="margin-top:50px">Our Core Values</h2>
                <p class="lead" style="">
                    <ul class="" style="list-style-type:none;">
                    <li style="font-size:130%">
                        <?= $this->Html->image('icon_core-customer-focus.png', array('style' => 'width:5%')); ?>
                        Customer Focus</li>
                    <li style="font-size:130%">
                        <?= $this->Html->image('icon_core-team-alignment.png', array('style' => 'width:5%')); ?>
                        Team Alignment  
                    </li>
                    <li style="font-size:130%">
                        <?= $this->Html->image('icon_core-value-added.png', array('style' => 'width:5%')); ?>
                        Value-added Work 
                    </li>
                    <li style="font-size:130%">
                        <?= $this->Html->image('icon_core-entrepreneurial-spirit.png', array('style' => 'width:5%')); ?>
                        Entrepreneurial Spirit
                    </li>
                </ul><br /><br />
                </p>
            </div>
        </div>
    </div>
</div>
