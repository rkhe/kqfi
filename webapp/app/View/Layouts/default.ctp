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
<html lang="en">
    <head>
        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>
            <?php
            echo $this->pageTitle;
            ?>
        </title>
        <?php
        echo $this->Html->meta('icon');
        //echo $this->Html->css('kingsfoods');

        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('carousel');
        echo $this->Html->css('jquery.nailthumb.1.1.min');
        echo $this->Html->css('lightbox');
        echo $this->Html->css('kqfi');        

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <!-- NAVBAR
    ================================================== -->
    <body>
        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div style="position: absolute;">
                        <?php
                        echo $this->Html->link($this->Html->image('kqfi_logo_web.png', array('alt' => 'King\'s Quality Foods Incorporated',
                                    'title' => 'King\'s Quality Foods Incorporated', 'border' => '0',
                                    'style' => 'width:110px;vertical-align:middle;margin-top:-15px;margin-right:15px;')), '/', array('escape' => false));
                        ?></div>
                        <div style="width:130px;">&nbsp;</div>
                    </div>
                    <div class="container">
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="<?= (strpos($this->here, "promo") > 0) ? "active" : ""; ?>"><?= $this->Html->link('Promo', array('controller' => 'posts', 'action' => 'promo')); ?></li>
                                <li class="<?= (strpos($this->here, "outlets") > 0) ? "active" : ""; ?>"><?= $this->Html->link('Outlets', array('controller' => 'pages', 'action' => 'outlets')); ?></li>
                                <li class="dropdown  <?= (strpos($this->here, "faq") > 0) ? "active" : ""; ?>">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FAQs <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="christmas"><?= $this->Html->link('Christmas Hams', array('controller' => 'pages', 'action' => 'faq#christmas')); ?></li>
                                        <li><?= $this->Html->link('Dealership', array('controller' => 'pages', 'action' => 'faq#dealership')); ?></li>
                                        <li><?= $this->Html->link('Rewards Card', array('controller' => 'pages', 'action' => 'faq#rewards')); ?></li>
                                        <li><?= $this->Html->link('Outlets', array('controller' => 'pages', 'action' => 'faq#outlets')); ?></li>
                                        <li role="separator" class="divider"></li>
                                        <li><?= $this->Html->link('ALL FAQs', array('controller' => 'pages', 'action' => 'faq')); ?></li>
                                    </ul>
                                </li>
                                <li class="<?= (strpos($this->here, "product") > 0) ? "active" : ""; ?>"><?= $this->Html->link('Menuboard', array('controller' => 'productCategories', 'action' => 'index')); ?></li>
                                <li class="<?= (strpos($this->here, "about") > 0) ? "active" : ""; ?>"><?= $this->Html->link('About Us', array('controller' => 'pages', 'action' => 'about')); ?></li>
                                <li class="<?= (strpos($this->here, "promo") > 0) ? "active" : ""; ?>"><?= $this->Html->link('Career', array('controller' => 'posts', 'action' => 'careers')); ?></li>
                                <li>
                                    <?php
                                    echo $this->Html->link(
                                            $this->Html->image('icon_fb.png', array('alt' => 'KQFI FB',
                                                'title' => 'Like us on Facebook', 'class' => 'social')), 'https://www.facebook.com/KingsFoods', array('style' => 'padding:0 5px 0 5px;', 'escape' => false, 'target' => '_blank'));
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    echo $this->Html->link($this->Html->image('icon_tw.png', array('alt' => 'KQFI TWITTER',
                                                'title' => 'Follow us on Twitter', 'class' => 'social')), 'https://twitter.com/kingsfoodscebu', array('style' => 'padding:0 5px 0 5px;', 'escape' => false, 'target' => '_blank'));
                                    ?>
                                </li>
                                <li>
                                    <?php
                                    echo $this->Html->link($this->Html->image('icon_ig.png', array('alt' => 'KQFI INSTAGRAM',
                                                'title' => 'Follow us on Instagram', 'class' => 'social')), 'https://www.instagram.com/kingsfoodscebu/', array('style' => 'padding:0 5px 0 5px;', 'escape' => false, 'target' => '_blank'));
                                    ?>
                                </li>
                            </ul>
                            <div class="col-sm-3 col-md-3 pull-right" style="text-align:right;">
                                <form class="navbar-form" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="info"><?php echo $this->Session->flash(); ?></div>
        <?php echo $this->fetch('content'); ?>

        <div class="container-fluid outlets">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2 style="margin-bottom: 40px;">Contact Us</h2>
                        <h4>Main Office</h4>
                        <div class="indent">
                            <span class="">S.E Jayme Street Paknaan Mandaue City, <br />6014, Cebu Philippines</span><br /><br />
                            <p><?= $this->Html->link('Find an Outlet near you! &raquo;', array('controller' => 'pages', 'action' => 'outlets'), array('class' => 'btn btn-default', 'escape' => false));
                            ?></p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h3 style="margin:25px 0px 40px 0px;">Customer Service</h3>
                        <div>
                            <span class="caption clear" style="width:150px;">Tel No.:</span>
                            <span class="content">(032) 343-7115 to 18</span><br />
                            <span class="caption clear" style="width:150px;">Fax No</span><span class="content">(032) 344-3908 / 420-6584</span><br />
                            <span class="caption clear" style="width:150px;">Email.:</span>
                            <span class="content"><a href="mailto:info@kingsfoods.com.ph">info@kingsfoods.com.ph</a></span><br >
                            <span class="caption clear" style="width:150px;">Business Hours:</span><span class="content">Mon to Sat – 8AM to 6PM</span><br />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; <?= date("Y"); ?> King's Quality Foods, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>

        </div><!-- /.container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the documdent so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>
        <?php
        echo $this->Html->script('lightbox.js');
        echo $this->Html->script('kqfi.js');
        echo $this->Html->script('bootstrap.min.js');
        echo $this->Html->script('jquery.nailthumb.1.1.min.js'); //http://www.garralab.com/nailthumb.php
        //echo $this->Html->script('jquery-rwdImageMaps.min.js');
        echo $this->fetch('script');
        ?>

        <div class="stickyTab">
            <?= $this->Html->image('talktous.jpg'); ?>
        </div>

        <?php if (strpos($this->here, "outlets") > 0) : ?>
            <style type="text/css">
                #map_canvas {
                    width: 450px;
                    height: 700px;
                    border: 1px solid #ccc;
                    margin-top:60px;
                }
            </style>
            <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCBPfek6bqbSoMj1GoxohOMUno58vUIpGw&sensor=false"></script>
            <script type="text/javascript">
                var gMap = {
                    /*
                     * process:
                     * 1. on map load, create Google map + create all markers using json data (show philippine map as a whole?)
                     * 2. create anchor/href for updating location, upon clicking use setCenter and setZoom api method
                     */
                    mapObj: null,
                    setMapCenter: function (lat, lng)
                    {
                        var latLng = new google.maps.LatLng(lat, lng);
                        gMap.mapObj.panTo(latLng);
                        gMap.mapObj.setZoom(15);
                    },

                    newMapMarker: function (name, content, lat, lng)
                    {
                        var contentString = '<div id="infoWindow"><strong>' +
                                name + '</strong><br />' + content + '</div>';

                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });

                        name = name.replace('<br />', '\n'); // this is to prevent error upon assigning name to title below
                        var marker = new google.maps.Marker({
                            position: new google.maps.LatLng(lat, lng),
                            map: gMap.mapObj,
                            title: name
                        });
                        google.maps.event.addListener(marker, 'click', function () {
                            infowindow.open(gMap.mapObj, marker);
                        });
                    },
                    load: function (addr) {
                        var mainOfc = addr.offices[0];
                        document.getElementById("map_canvas").innerHTML = "";
                        var latLng = new google.maps.LatLng(mainOfc.lat, mainOfc.lng);
                        var myOptions = {
                            zoom: 13,
                            center: latLng,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                        // load map
                        gMap.mapObj = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                        // create markers
                        for (var i = 0; i < addr.offices.length; i++) {
                            gMap.newMapMarker(addr.offices[i].name, addr.offices[i].content, addr.offices[i].lat, addr.offices[i].lng);
                        }
                    }
                };

    <?php
    /*
      Main Office: 10.344869,123.958169
      Fuente Outlet: 10.309963,123.894345
      Leon Kilat Outlet: 10.293122,123.897167
      Carbon Outlet: 10.291459,123.899039
      Tabunok Outlet: 10.26237,123.837911 ; NEW = 10.2635199, 123.8398651
      Paknaan Outlet: 10.344977,123.958244

      gkey =AIzaSyCBPfek6bqbSoMj1GoxohOMUno58vUIpGw
     */
    ?>

                var coordinates = {"offices": [
                        {"name": "MAIN OFFICE<br />S.E Jayme Street Paknaan Mandaue City", "content": "Tel. No.: (032)343-7115 to 18<br />Fax No.: (032)344-3908 / 420-6584", "lat": "10.344869", "lng": "123.958169"},
                        {"name": "Fuente Outlet<br />Gen. Maxilom Ave. Fuente Osmeña Cebu City", "content": "Contact #: 2538997 / 2550041 / 2534313 / 09228206586", "lat": "10.309963", "lng": "123.894345"},
                        {"name": "Leon Kilat Outlet<br />Corner Magallanes & Leon Kilat St. Cebu City", "content": "Contact #: 2561360 / 2555096 / 09228206584", "lat": "10.293122", "lng": "123.897167"},
                        {"name": "Carbon Outlet<br />M.C Briones unit 2 Carbon Cebu City", "content": "Contact #: 09228206585", "lat": "10.2918179", "lng": "123.89902"},
                        {"name": "Tabunok Outlet 1<br />Tabunok Talisay Cebu", "content": "Contact #: (0932) 630 0830", "lat": "10.2626022", "lng": "123.8378048"},
                        {"name": "Tabunok Outlet 2<br />Tabunok Talisay Cebu", "content": "Contact #: (0925) 506 2538", "lat": "10.2639443", "lng": "123.8395368"},
                        {"name": "Paknaan Outlet<br />S.E Jayme Street Paknaan Mandaue City 6014", "content": "Contact #: (032) 343-7115 to 18<br />Fax No: (032) 344-3908 / 420-6584", "lat": "10.344977", "lng": "123.958244"},
                        {"name": "Tisa Outlet<br />Katipunan St, Cebu City, Cebu", "content": "Contact #: (0933) 655 3377 / (0956) 901 5427", "lat": "10.301779", "lng": "123.8700121"},
                        {"name": "CENTRO Outlet<br />Centro Mandaue City, Cebu", "content": "Contact #: (0932) 287 9263 or (0956) 901 5440", "lat": "10.3280836", "lng": "123.9408788"}
                    ]};
                $(document).ready(function () {
                    gMap.load(coordinates);
                });
            </script>
        <?php elseif (strpos($this->here, "products") > 0) : ?>
            <script type="text/javascript">
                $(document).ready(function () {
                    //$('#modalmenuboard').modal({ });
                    //$('map').imageMapResize();
                    //$('img[usemap]').rwdImageMaps();
                    $('.thumbme').nailthumb({
                        width:150,
                        height:150,
                        //replaceAnimation:'animate'
                    });
                });
            </script>
        <?php else : ?>
            <script type="text/javascript">
                $(document).ready(function () {
                });
            </script>
        <?php endif; ?>


    </body>
</html>
