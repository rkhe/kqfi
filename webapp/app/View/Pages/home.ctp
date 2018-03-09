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
<?php $this->pageTitle = 'King\'s Quality Foods Incorporated'; ?>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
        //echo '<li data-target="#myCarousel" data-slide-to="1" class=""></li>';
        ?>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!--        <div class="item active">
                    <picture>
                        <source media="(max-width: 539px)" srcset="<?= $this->webroot; ?>img/banner/banner-christmashams-s1.png">    
                        <source media="(min-width: 540px) and (max-width: 767px)" srcset="<?= $this->webroot; ?>img/banner/banner-christmashams-s2.png">
                        <source media="(min-width: 768px) and (max-width: 1083px)" srcset="<?= $this->webroot; ?>img/banner/banner-christmashams-s3.png">
                        <source media="(min-width: 1084px) and (max-width: 1399px)" srcset="<?= $this->webroot; ?>img/banner/banner-christmashams-s4.png">
                        <source media="(min-width: 1400px) and (max-width: 1778px)" srcset="<?= $this->webroot; ?>img/banner/banner-christmashams-s5.png">
                        <img src="<?= $this->webroot; ?>img/banner/banner-christmashams-s5.png" style="max-height:440px;" />
                    </picture>
                </div>-->
        <div class="item active">
            <picture>
                <source media="(max-width: 539px)" srcset="<?= $this->webroot; ?>img/banner/banner-1.1.1.jpg">
                <img src="<?= $this->webroot; ?>img/banner/banner-1.1.jpg" style="max-height:440px;" />
            </picture>
        </div>
        <div class="item">
            <picture>
                <source media="(max-width: 539px)" srcset="<?= $this->webroot; ?>img/banner/banner-1.2.jpg">
                <img src="<?= $this->webroot; ?>img/banner/banner-1.2.jpg" style="max-height:440px;" />
            </picture>
        </div>
        <div class="item">
            <picture>
                <source media="(max-width: 539px)" srcset="<?= $this->webroot; ?>img/banner/banner-1.3.jpg">
                <img src="<?= $this->webroot; ?>img/banner/banner-1.3.jpg" style="max-height:440px;" />
            </picture>
        </div>
        <div class="item">
            <picture>
                <source media="(max-width: 539px)" srcset="<?= $this->webroot; ?>img/banner/banner-1.4.jpg">
                <img src="<?= $this->webroot; ?>img/banner/banner-1.4.jpg" style="max-height:440px;" />
            </picture>
        </div>
        <div class="item">
            <picture>
                <source media="(max-width: 539px)" srcset="<?= $this->webroot; ?>img/banner/banner-1.4.jpg">
                <img src="<?= $this->webroot; ?>img/banner/banner-1.5.jpg" style="max-height:440px;" />
            </picture>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container-fluid marketing">
    <div class="container">
        <!-- Three columns of text below the carousel -->
        <div class="row" style="text-align:center">
            <?php
//                $noPromo = false;
//                if (!empty($posts)) {
//                    echo '<div class="col-lg-4">';
//                    echo $this->Html->image('posts/'.$posts[0]['Post']['image_url'], array('style' => 'width:400px;', 'class' => 'img-rounded'));
//                    echo '<h2>'.$posts[0]['Post']['title'].'</h2>';
//                    echo $this->Html->link('Learn more &raquo;', array('controller' => 'posts', 'action' => 'promo'), array('class'=>'btn btn-default', 'escape' => false));
//                    echo '</div>';
//                } else {
//                    $noPromo = true;
//                    //echo '<a class="btn btn-default" href="/promo" role="button">Learn more &raquo;</a></p>';
//                }
            ?>
            
            <div class="col-lg-3">
                <?= $this->Html->link($this->Html->image('featurette/featurette-dealership-3.png', array('alt' => 'Dealership Program', 'style' => 'width:400px', 'class' => 'img-rounded')),
                        array('controller' => 'pages', 'action' => 'faq#dealership'), array('escape' => false)); ?>
                <h2>Dealership Program</h2>
                <p>Be a King's Quality Foods dealer and enjoy great discounts and freebees!</p>
                <p><?= $this->Html->link('Learn more &raquo;', array('controller' => 'pages', 'action' => 'faq'), array('class'=>'btn btn-default', 'escape' => false)); ?></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <?= $this->Html->link($this->Html->image('featurette/featurette-rewards-2.png', array('alt' => 'Rewards card', 'style' => 'width:400px', 'class' => 'img-rounded')),
                        array('controller' => 'pages', 'action' => 'faq#rewards'), array('escape' => false)); ?>
                <h2>Rewards</h2>
                <p>Sa matagpalit nimo ug King's products, makadawat ka'g daghang premyo.</p>
                <p><?= $this->Html->link('Learn more &raquo;', array('controller' => 'pages', 'action' => 'faq'), array('class'=>'btn btn-default', 'escape' => false)); ?></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <?= $this->Html->link($this->Html->image('featurette/featurette-freshmeat-1.jpg', array('alt' => 'Fresh Meat', 'style' => 'width:400px', 'class' => 'img-rounded')),
                        array('controller' => 'pages', 'action' => 'outlets'), array('escape' => false)); ?>
                <h2>Fresh Pork, Chicken and Fries</h2>
                <p>Bounty Fresh now available at our selected factory outlets!</p>
                <p><?= $this->Html->link('Find outlets &raquo;', array('controller' => 'pages', 'action' => 'outlets'), array('class'=>'btn btn-default', 'escape' => false)); ?></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <?= $this->Html->link($this->Html->image('featurette/featurette-motorbike-2.jpg', array('alt' => 'We Deliver', 'style' => 'width:400px', 'class' => 'img-rounded')),
                        array('controller' => 'pages', 'action' => 'outlets'), array('escape' => false)); ?>
                <h2>We Deliver</h2>
                <p>Ordering your favorite King's Quality Hams made easier with our Express Delivery service. Now available in all outlets!</p>
                <p><?= $this->Html->link('Find outlets &raquo;', array('controller' => 'pages', 'action' => 'outlets'), array('class'=>'btn btn-default', 'escape' => false)); ?></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

    </div>
</div>
<!-- START THE FEATURETTES -->
<style type="text/css">
    .tblOutlets {
        font-size: 120%;
    }
    .tblOutlets em {
        font-size: 70%;
        font-weight: normal;
    }
    .tblOutlets td {
        padding-top: 5px;
    }
</style>

<div class="">
    <div style="position:relative;top:325px;left:65%;width: 500px;">
        <?= $this->Html->link('Our Vision &raquo;', array('controller' => 'pages', 'action' => 'about#vision'), array('class'=>'btn btn-default', 'escape' => false)); ?>&nbsp;
        <?= $this->Html->link('Our Mission &raquo;', array('controller' => 'pages', 'action' => 'about#mission'), array('class'=>'btn btn-default', 'escape' => false)); ?>&nbsp;
        <?= $this->Html->link('Our Core Values &raquo;', array('controller' => 'pages', 'action' => 'about#core'), array('class'=>'btn btn-default', 'escape' => false)); ?>
    </div>
    <?= $this->Html->image('featurette/featurette-60years-2.jpg', array('alt' => '60 Years', 'style' => 'width:100%', 'class' => 'featurette-image img-responsive center-block')); ?>
</div>

<!--<hr class="featurette-divider">-->
<div class="container-fluid marketing hide">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Rewards, rewards, rewards. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
            </div>
        </div>
    </div>
    <!--    <hr class="featurette-divider">-->
</div>
<!-- /END THE FEATURETTES -->
</div>
