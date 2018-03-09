
<?php $this->pageTitle = 'Contact Us'; ?>
<style type="text/css">
		#nav {top: 125px !important;}
</style>
<span style="float:left;font: Normal 28px Arial;color:#333333;margin: 15px 0px 30px 0px;">Contact Us</span>
<br class="clear" />
<div class="flft" style="width:550px;">
	<span style="font-size:16px;font-weight: bold;">KING’S QUALITY FOODS (CEBU) INC.</span><br /><br />

    <span class="lg">Main Office</span><br />
    <div class="indent">
        <span class="">S.E Jayme Street Paknaan Mandaue City, <br />6014, Cebu Philippines</span><br /><br />
        <a href="javascript:gMap.setMapCenter(10.344869,123.958169);"><?php echo $this->Html->image('icon_pin.png', array('alt' => '', 'style' => 'width:10px;height:16px;vertical-align:middle;')); ?>&nbsp;Find in map</a>
        <br /><br />
        <span class="title clear" style="width:150px;">Tel No.:</span><span class="content">(032) 343-7115 to 18</span><br />
        <span class="title clear" style="width:150px;">Fax No</span><span class="content">(032) 344-3908/420-6584</span><br />

    </div>
	<br class="clear" />

    <span class="lg">Customer Service</span><br />
    <div class="indent">
        <span class="title clear" style="width:150px;">Tel No.:</span>
        <span class="content">(032) 343-7115 to 18</span><br />
        <span class="title clear" style="width:150px;">Email.:</span>
        <span class="content"><a href="mailto:info@kingsfoods.com.ph">info@kingsfoods.com.ph</a></span>
    </div>
    <br /><br /><br />
	<h2>OUR CEBU OUTLETS:</h2>
    <b>FUENTE OUTLET</b><br />
    <div class="indent">
        <span class="title clear" style="width:150px;">Contact #:</span>	2538997 / 2550041 / 2534313 / 09228206586<br />
        <span class="title clear" style="width:150px;">Address:</span>		Gen. Maxilom Ave. Fuente Osmeña Cebu City<br /><br />
        <a href="javascript:gMap.setMapCenter(10.309963,123.894345);"><?php echo $this->Html->image('icon_pin.png', array('alt' => '', 'style' => 'width:10px;height:16px;vertical-align:middle;')); ?>&nbsp;Find in map</a>
        <br /><br />
    </div>

    <b>LEON KILAT OUTLET</b><br />
    <div class="indent">
        <span class="title clear" style="width:150px;">Contact#:</span>		2561360 / 2555096 / 09228206584<br />
        <span class="title clear" style="width:150px;">Address:</span>		Corner Magallanes & Leon Kilat St. Cebu City<br /><br />
        <a href="javascript:gMap.setMapCenter(10.293122,123.897167);"><?php echo $this->Html->image('icon_pin.png', array('alt' => '', 'style' => 'width:10px;height:16px;vertical-align:middle;')); ?>&nbsp;Find in map</a>
        <br /><br />
    </div>

    <b>CARBON OUTLET</b><br />
    <div class="indent">
        <span class="title clear" style="width:150px;">Contact #:</span>		09228206585<br />
        <span class="title clear" style="width:150px;">Address:</span>		M.C Briones unit 2 Carbon Cebu City<br /><br />
        <a href="javascript:gMap.setMapCenter(10.291459,123.899039);"><?php echo $this->Html->image('icon_pin.png', array('alt' => '', 'style' => 'width:10px;height:16px;vertical-align:middle;')); ?>&nbsp;Find in map</a>
        <br /><br />
    </div>

    <b>TABUNOK OUTLET</b><br />
    <div class="indent">
        <span class="title clear" style="width:150px;">Contact #:</span>		09326300830<br />
        <span class="title clear" style="width:150px;">Address:</span>		Tabunok Talisay Cebu<br /><br />
        <a href="javascript:gMap.setMapCenter(10.26237,123.837911);"><?php echo $this->Html->image('icon_pin.png', array('alt' => '', 'style' => 'width:10px;height:16px;vertical-align:middle;')); ?>&nbsp;Find in map</a>
        <br /><br />
    </div>

    <b>PAKNAAN OUTLET</b><br />
    <div class="indent">
        <span class="title clear" style="width:150px;">Contact #:</span>     (032) 343-7115 to 18<br />
        <span class="title clear" style="width:150px;">Fax No:</span>		(032) 344-3908 / 420-6584<br />
        <span class="title clear" style="width:150px;">Address:</span>		S.E Jayme Street Paknaan Mandaue City 6014<br /><br />
        <a href="javascript:gMap.setMapCenter(10.344977,123.958244);"><?php echo $this->Html->image('icon_pin.png', array('alt' => '', 'style' => 'width:10px;height:16px;vertical-align:middle;')); ?>&nbsp;Find in map</a>
        <br /><br />
    </div>
</div>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCBPfek6bqbSoMj1GoxohOMUno58vUIpGw&sensor=false"></script>
<style type="text/css">
    #content table td {vertical-align: top;}
    #map_canvas {
        width: 400px;
        height: 300px;
        border: 1px solid #ccc;
    }
</style>
<div class="flft" style="width:400px;">
    <div id="map_canvas"></div><br /><br />
    <div id="email">
        <?php echo $this->Form->create('Email'); ?>
        <fieldset>
            <legend class="bold"><?php echo __('SEND US AN EMAIL:'); ?></legend><br />
            <?php
                echo $this->Form->input('name');
                echo $this->Form->input('email');
                echo $this->Form->input('subject');
                echo $this->Form->input('message', array('type' => 'textarea'));
            ?>
            <label class="" for="captcha">*Please enter the verification code shown below.</label>
            <div id="captcha-wrap">
                <?php echo $this->Html->image('icon_refresh.png', array('alt' => 'refresh captcha', 'id' => 'refresh-captcha')); ?>
                <img src="/php/newCaptcha.php" alt="" id="captcha" />
            </div>
            <input class="narrow text input" id="captcha" name="captcha" type="text" placeholder="Verification Code">
            <?php
                echo $this->Form->submit('Send', array(
                    'controller' => 'pages',
                    'action' => 'send',
                    'onclick' => 'alert("validate");',
                    'class' => 'buttonStyle frht',
                    'style' => 'margin-right:25px;'));
                echo $this->Form->end();
            ?>


        </fieldset>
    </div>
</div>
<br class="clear" />
<br /><br />
<br /><br />

<script type="text/javascript">
    var gMap = {
        /*
         * process:
         * 1. on map load, create Google map + create all markers using json data (show philippine map as a whole?)
         * 2. create anchor/href for updating location, upon clicking use setCenter and setZoom api method
         */
        mapObj : null,
        setMapCenter : function(lat, lng)
        {
            var latLng = new google.maps.LatLng(lat, lng);
            gMap.mapObj.panTo(latLng);
            gMap.mapObj.setZoom(15);
        },

        newMapMarker : function(name, content, lat, lng)
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
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(gMap.mapObj,marker);
            });
        },
        load : function (addr) {
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
            for(var i = 0; i < addr.offices.length; i++) {
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
        Tabunok Outlet: 10.26237,123.837911
        Paknaan Outlet: 10.344977,123.958244

    gkey =AIzaSyCBPfek6bqbSoMj1GoxohOMUno58vUIpGw
    */
?>

    var coordinates = {"offices": [
        {"name": "MAIN OFFICE<br />S.E Jayme Street Paknaan Mandaue City", "content": "Tel. No.: (032)343-7115 to 18<br />Fax No.: (032)344-3908 / 420-6584", "lat": "10.344869", "lng": "123.958169"},
        {"name": "Fuente Outlet<br />Gen. Maxilom Ave. Fuente Osmeña Cebu City", "content": "Contact #: 2538997 / 2550041 / 2534313 / 09228206586", "lat": "10.309963", "lng": "123.894345"},
        {"name": "Leon Kilat Outlet<br />Corner Magallanes & Leon Kilat St. Cebu City", "content": "Contact #: 2561360 / 2555096 / 09228206584", "lat": "10.293122", "lng": "123.897167"},
        {"name": "Carbon Outlet<br />M.C Briones unit 2 Carbon Cebu City", "content": "Contact #: 09228206585", "lat": "10.291459", "lng": "123.899039"},
        {"name": "Tabunok Outlet<br />Tabunok Talisay Cebu", "content": "Contact #: 09326300830", "lat": "10.26237", "lng": "123.837911"},
        {"name": "Paknaan Outlet<br />S.E Jayme Street Paknaan Mandaue City 6014", "content": "Contact #: (032) 343-7115 to 18<br />Fax No: (032) 344-3908 / 420-6584", "lat": "10.344977", "lng": "123.958244"}]};
    $(document).ready(function() {
        gMap.load(coordinates);
    });
</script>
<?php echo $this->Html->script('jquery-captcha.js'); ?>