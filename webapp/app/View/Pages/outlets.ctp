<?php $this->pageTitle = 'Outlets'; ?>
<div class="container-fluid first-container bg-gold" style="padding-top:0px;">
    <div class="container" style="margin-right: 65px;">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><?=$this->Html->link('Home', $this->webroot);?></li>
                    <li class="bold">Outlets</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 white">
                <h1 style="margin:5px 0px;">Find an Outlet!</h1>
                <span style="margin-left:100px;">We are available all over Cebu!</span><br /><br />
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

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Store Locator</h2>
                <div class="outlet-page item">
                    <div class="pin text-center">
                        <a href="#map" onclick="javascript:gMap.setMapCenter(10.344977, 123.958244);">
                        <?=$this->Html->image('icon_pin2.png'); ?>
                        Find</a>
                    </div>
                    <div class="item">
                        <b>Paknaan Outlet</b><br>
                        S.E Jayme Street Paknaan Mandaue City 6014<br />
                        <span class="glyphicon glyphicon-phone-alt"></span> (032) 343 7115 to 18, (032) 420 6586<br />
                        <span class="glyphicon glyphicon-phone"></span> (0917) 430 5358<br />
                        <span class="glyphicon glyphicon-print" title="Fax"></span> (032) 344-3908, (032) 420-6584<br />
                        Opens: Mon to Sat - 8am to 6pm
                    </div>                    
                </div>
                
                <div class="outlet-page item">
                    <div class="pin text-center">
                        <a href="#map" onclick="javascript:gMap.setMapCenter(10.309963, 123.894345);">
                        <?=$this->Html->image('icon_pin2.png'); ?>
                        Find</a>
                    </div>
                    <div class="item">
                        <b>Fuente Osmeña Outlet</b><br>
                        Gen. Maxilom Ave. Fuente Osmeña Cebu City<br />
                        <span class="glyphicon glyphicon-phone-alt"></span> (032) 255 0041, (032) 253 4313<br />
                        <span class="glyphicon glyphicon-phone"></span> (0922) 820 6586<br />
                        Opens: Mon to Sat - 9am to 7pm
                    </div>                    
                </div>
                
                <div class="outlet-page item">
                    <div class="pin text-center">
                        <a href="#map" onclick="javascript:gMap.setMapCenter(10.293122, 123.897167);">
                        <?=$this->Html->image('icon_pin2.png'); ?>
                        Find</a>
                    </div>
                    <div class="item">
                        <b>Leon Kilat Outlet</b><br>
                        Corner Magallanes & Leon Kilat St. Cebu City<br />
                        <span class="glyphicon glyphicon-phone-alt"></span> (032) 256 1360, (032) 255 5096<br />
                        <span class="glyphicon glyphicon-phone"></span> (0922) 820 6584<br />
                        Opens: Mon to Sat - 7am to 6pm, Sun - 7am to 4pm
                    </div>                    
                </div>
                
                <div class="outlet-page item">
                    <div class="pin text-center">
                        <a href="#map" onclick="javascript:gMap.setMapCenter(10.2917584, 123.8991966);">
                        <?=$this->Html->image('icon_pin2.png'); ?>
                        Find</a>
                    </div>
                    <div class="item">
                        <b>Carbon Outlet</b><br>
                        M.C Briones unit 2 Carbon Cebu City<br />
                        <span class="glyphicon glyphicon-phone"></span> (0922) 820 6585<br />
                        Opens: Mon to Sat - 6am to 5pm, Sun - 6am to 12nn
                    </div>                    
                </div>
                
                <div class="outlet-page item">
                    <div class="pin text-center">
                        <a href="#map" onclick="javascript:gMap.setMapCenter(10.26237,123.837911);">
                        <?=$this->Html->image('icon_pin2.png'); ?>
                        Find</a>
                    </div>
                    <div class="item">
                        <b>Tabunok Outlet 1</b><br>
                        (Across St. Joseph Parish) Tabunok, Talisay, Cebu<br />
                        <span class="glyphicon glyphicon-phone-alt"></span> (032) 236 0307<br />
                        <span class="glyphicon glyphicon-phone"></span> (0932) 630 0830<br />                        
                        Opens: Mon to Sat - 6am to 6pm, Sun - 6am to 3pm
                    </div>                    
                </div>
                
                <div class="outlet-page item">
                    <div class="pin text-center">
                        <a href="#map" onclick="javascript:gMap.setMapCenter(10.2639443, 123.8395368);">
                        <?=$this->Html->image('icon_pin2.png'); ?>
                        Find</a>
                    </div>
                    <div class="item">
                        <b>Tabunok Outlet 2</b><br>
                        (Below the fly-over) Tabunok, Talisay, Cebu<br />
                        <span class="glyphicon glyphicon-phone"></span> (0925) 506 2538<br />
                        Opens: Mon to Sat 7am to 7pm, Sun - 7am to 4pm
                    </div>                    
                </div>
                
                <div class="outlet-page item">
                    <div class="pin text-center">
                        <a href="#map" onclick="javascript:gMap.setMapCenter(10.3017793,123.869465);">
                        <?=$this->Html->image('icon_pin2.png'); ?>
                        Find</a>
                    </div>
                    <div class="item">
                        <b>Tisa Outlet</b><br>
                        Tisa, Labangon (Near Public Market), Cebu City<br />
                        <span class="glyphicon glyphicon-phone"></span> (0933) 655 3377, (0956) 901 5427<br />
                        Opens: Mon to Fri - 7am to 7pm, Sat to Sun - 7am to 4pm
                    </div>                    
                </div>
                
                <div class="outlet-page item" onclick="javascript:gMap.setMapCenter();">
                    <div class="pin text-center">
                        <?=$this->Html->image('icon_pin2.png'); ?>
                    </div>
                    <div class="item">
                        <b>Lapu-Lapu Outlet</b><br>
                        Lapu-lapu City, Near Public Market, <br />(Across Jollibee Radaza Plaza)<br />
                        <span class="glyphicon glyphicon-phone-alt"></span> (032) 340 1402<br />
                        Opens: Mon to Sat - 7am to 6pm, Sun - 7am to 4pm
                    </div>                    
                </div>
				
				<div class="outlet-page item" onclick="javascript:gMap.setMapCenter();">
                    <div class="pin text-center">
                        <?=$this->Html->image('icon_pin2.png'); ?>
                    </div>
                    <div class="item">
                        <b>Minglanilla Outlet</b><br>
                        Ward I, Poblacion, Minglanilla, Cebu<br /> (Beside Rose Pharmacy/Palawan Pawnshop)<br />
                        <span class="glyphicon glyphicon-phone-alt"></span> (032) 490 4170 / (0943) 278 6902 / (0995) 023 7571<br />
                        Opens: Daily - 7am to 6pm
                    </div>                    
                </div>
            </div>
            <div class="col-md-5" id="map">
                <div id="map_canvas"></div>
            </div>
        </div>
    </div>
</div>
<br style="clear:both" />
