<?php $this->pageTitle = 'Promo'; ?>
<div class="container-fluid first-container bg-red">
    <div class="container" style="margin-right: 65px;">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><?=$this->Html->link('Home', $this->webroot);?></li>
                    <li class="bold">Promo</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 white">
                <h1 style="margin:5px 0px;">King's Quality Promos</h1>
                <span style="margin-left:100px;"></span><br /><br />
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-darkgray">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding:10px;F">
                &nbsp;
            </div>
        </div>
    </div>
</div>

<div class="container" style="height:400px;">
<?php $count = 0; ?>
<?php if (isset($posts) && count($posts) > 0): ?>
    <?php for ($i = 0; $i < count($posts); $i++) : // ($posts as $post): ?>
        <?php if ($i > 0): ?>
            <hr />
            <div class="container-fluid">
        <?php else : ?>
            <div class="container-fluid first-container">
        <?php endif; ?>
            <div class="container">
                <img src="<?= $this->webroot ?>img/posts/<?= $posts[$i]['Post']['image_url'] ?>" style="float:right;width:500px;" class="frght infoBox" />
                <h2><?= $posts[$i]['Post']['title'] ?></h2>
                <span style="font-style:italic"><b class="red">Promo runs from: </b>
                    <?php
                    echo date_format(date_create($posts[$i]['Post']['startdate']), 'M d, Y')
                    ?> until 
                    <?php
                    if (date_format(date_create($posts[$i]['Post']['enddate']), 'Y') == '2037') {
                        echo 'supplies last!';
                    } else {
                        echo date_format(date_create($posts[$i]['Post']['enddate']), 'M d, Y');
                        echo ' only.';
                    }
                    ?></span><br /><br />
                <?= $posts[$i]['Post']['body'] ?>
            </div>
        </div>
    <?php endfor; ?>
<?php else: ?>
    <div style="width:100%;margin: 50px 0;text-align:center;">
        <span style="font-style:italic;">Sorry, no new promotions as of the moment.</span>
    </div>
<?php endif; ?>
</div>