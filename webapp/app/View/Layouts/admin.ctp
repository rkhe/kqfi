<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php
        echo $this->pageTitle;
        ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('kingsfoods');

    echo $this->Html->script('jquery.min.js');
    echo $this->Html->script('jquery-ui.min.js');
    echo $this->Html->script('jquery.cycle.all.latest.js');
    echo $this->Html->script('jquery.easing.1.3.js');
    echo $this->Html->script('kingsfoods.js');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <script language="javascript" type="text/javascript">
        $(document).ready(function(){
            if ($('.slideshow').length > 0) {
                $('.slideshow').before('<div id="nav">').cycle({
                    random: 1,
                    timeout: 8000,
                    fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                    pager:  '#nav'
                });
            }
            kqfi_products.initialize();
        });
    </script>
    <style type="text/css">
        #nav {position: relative;float:left; top: 325px; left: 20px; z-index: 1000;}
        #nav a { background: url(<?php echo $this->webroot; ?>img/circle.png) no-repeat; width: 14px; height:14px; float:left; padding-right: 10px; text-indent: -9999px; }
        #nav a.activeSlide { background: url(<?php echo $this->webroot; ?>img/active-circle.png) no-repeat; }
        #nav a:focus { outline: none; }
    </style>
</head>
<body>
<div id="container">
    <div id="inner-container">
        <div id="header">
            <div class="flft">
                <?php echo $this->Html->link($this->Html->image('kqfi_logo_web.png', array('alt' => 'King\'s Quality Foods Incorporated', 'title' => 'King\'s Quality Foods Incorporated', 'border' => '0')), '/', array('escape' => false)); ?>
            </div>
            <div class="frht" style="margin-top:50px;text-align:right;">
                <?php echo $this->Html->link('Questions', '/contact', array('class' => '')); ?>
                <?php echo $this->Html->link($this->Html->image('transparent.png', array('alt' => 'Facebook', 'title' => 'Like & share us on facebook', 'border' => '0', 'class' => 'help')), 'contact', array('escape' => false)); ?>
                &nbsp;&nbsp;
                <?php echo $this->Html->link('Help', '/pages/help', array('class' => '')); ?><br />

                <!-- search -->
                <input type="text" id="txtSearch" class="search" />
                <?php echo $this->Html->image('transparent.png', array('alt' => '', 'class' => 'search')); ?>
            </div>
        </div>
        <div id="navigation" class="clear">
            <?php echo $this->Html->link('HOME', '/', array('class' => (strpos($this->pageTitle, "Home") > 0) ? "active" : "")); ?>
            <?php echo $this->Html->link('ABOUT US', '/pages/about', array('class' => (strpos($this->here, "about") > 0) ? "active" : "")); ?>
            <?php echo $this->Html->link('NEWS', '/posts/index/1', array('class' => (strpos($this->here, "posts") > 0) ? "active" : "")); ?>
            <?php echo $this->Html->link('PRODUCT LINE', '/ProductCategories/index', array('class' => (strpos($this->here, "products") > 0) ? "active" : "")); ?>
            <?php echo $this->Html->link('CONTACT US', '/contact', array('class' => (strpos($this->here, "contact") > 0) ? "active" : "")); ?>
            <!-- <?php echo $this->Html->link('DOWNLOADS', '/pages/downloads', array('class' => (strpos($this->here, "downloads") > 0) ? "active" : "")); ?> -->
        </div>
        <div id="content">
            <?php
            //pr(strpos($this->here, "admin_home"));
            if ($isLoggedIn == 1 && strpos($this->here, "admin_home") == "") {
                echo $this->Html->link($this->Html->image('transparent.png', array('title' => 'Administrator Home', 'border' => '0', 'class' => 'home')) . ' Manage Home', '/pages/admin_home', array('escape' => false));
                echo '<br /><br />';
                //echo $this->Html->link('Manage Home', '/pages/admin_home', array('class' => 'gray', 'style'));
            }
            ?>
            <div class="info"><?php echo $this->Session->flash(); ?></div>

            <?php echo $this->fetch('content'); ?>
        </div>
        <div id="footer" class="clear">
            <div class="flft" style="padding-top:15px;">
                <span class="gray">CONNECT &amp; SHARE: </span>
                <?php echo $this->Html->link($this->Html->image('transparent.png', array('alt' => 'Facebook', 'title' => 'Like & share us on facebook', 'border' => '0', 'class' => 'fb-sm')), '#', array('escape' => false)); ?>
                <?php echo $this->Html->link($this->Html->image('transparent.png', array('alt' => 'Twitter', 'title' => 'Share us on Twitter', 'border' => '0', 'class' => 'twitter-sm')), '#', array('escape' => false)); ?>
            </div>
            <div class="frht gray" style="text-align:right;padding-top:5px;">
                <?php echo $this->Html->link('About Us', '/pages/about', array('class' => 'gray bold lh24')); ?>&nbsp;&nbsp;|
                <?php echo $this->Html->link('Product Line', '/ProductCategories/index', array('class' => 'gray bold lh24')); ?>&nbsp;&nbsp;|
                <?php echo $this->Html->link('Contact Us', '/contact', array('class' => 'gray bold lh24')); ?>

                <!--<br class="br5" />
                 contact and address
                <span class="gray">S.E Jayme Street Paknaan Mandaue City 6014, Cebu, Philippines</span><br />
                <span class="gray"><b>Tel:</b> (032) 343-7115 to 18</span>&nbsp;&nbsp;
                <span class="gray"><b>Fax:</b> (032) 344-3908/420-6584</span>
                -->
                <br class="br5" />
                <!-- copyrights -->
                Copyright &copy; 2013 King's Quality Foods Incorporated&nbsp;&nbsp;|
                <!--
					<?php echo $this->Html->link('Terms of Use', '/pages/terms_of_use', array('class' => 'gray')); ?>&nbsp;&nbsp;|
					<?php echo $this->Html->link('Privacy Policy', '/pages/privacy_policy', array('class' => 'gray')); ?>&nbsp;&nbsp;|
					-->
                <?php
                if ($isLoggedIn == 1) {
                    echo $this->Html->link('Manage', '/pages/admin_home', array('class' => 'gray'));
                    echo '&nbsp;|&nbsp;';
                    echo $this->Html->link('Logout', '/users/logout', array('class' => 'gray'));
                } else {
                    echo $this->Html->link('Login', '/users/login', array('class' => 'gray'));
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div style="clear:both"></div>
<div style="margin-top:15px;">&nbsp;</div>
<div style="display:none;">
    <?php echo $this->element('sql_dump'); ?>
</div>
</body>
</html>
