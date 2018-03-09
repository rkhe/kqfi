<?php $this->pageTitle = 'Frequently Asked Questions'; ?>
<div class="container-fluid first-container bg-gold">
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
                <h1 style="margin:5px 0px;">Frequently Asked Questions</h1>
                <span style="margin-left:0px;">Got more question? 
                Call us directly at (032) 343 7115 to 18 or 420 6584. 
                We are happy to answer all your inquiries.</span><br /><br />
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-darkgray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="submenuitem white">
                    <li class="christmas"><a href="#christmas">Christmas Hams</a></li>
                    <li><a href="#dealership">Dealership Program</a></li>
                    <li><a href="#rewards">Rewards Card</a></li>
                    <li><a href="#outlets">Outlets</a></li>
                    <li><a href="#wheretobuy">Where to buy?</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="container first-container">
    <div id="christmas" class="container christmas">
        <h2>Questions about Christmas Hams</h2>
        <span style="font: Italic 28px Arial;color:#990000;margin: 15px 0px 30px 0px;">Seasons Greetings!</span><br />
        <span>Kindly see the details below for the FAQ of King’s Christmas Hams 2016.</span><br /><br />
        <b>LIST OF PRODUCTS & SRP PRICE</b>
        <table style="font-size:14px;">
            <tr><td style="width:175px;">Pear Shaped Ham</td><td style="width:75px;">1kg</td><td style="width:75px;" class="hide">₱ 230.00</td></tr>
            <tr><td>Pear Shaped Ham</td><td>750g</td><td class="hide">₱ 185.00</td></tr>
            <tr><td>Pear Shaped Ham</td><td>500g</td><td class="hide">₱ 130.00</td></tr>
            <tr><td>Piña Ham</td><td>1kg</td><td class="hide">₱ 460.00</td></tr>
            <tr><td>Piña Ham</td><td>900g</td><td class="hide">₱ 414.00</td></tr>
            <tr><td>Piña Ham</td><td>800g</td><td class="hide">₱ 368.00</td></tr>
            <tr><td>Ball Ham</td><td>800g</td><td class="hide">₱ 245.00</td></tr>
            <tr><td>IQF Pear Shaped Ham</td><td>1kg</td><td class="hide">₱ 190.00</td></tr>
            <tr><td>IQF Pear Shaped Ham</td><td>500g</td><td class="hide">₱ 99.00</td></tr>
            <tr><td>Chinese Ham</td><td>Per kg</td><td class="hide">₱ 800.00</td></tr>            
        </table>
    </div>
    <div class="container hide" style="text-align:center;">
        <?= $this->Html->image('featurette/featurette-dealership-2.png'); ?>
    </div>
<!--    <div class="container christmas" style="text-align:center;">
        <?= $this->Html->image('ornament01.png'); ?>
    </div>-->
    <div id="dealership" class="container">
        <h2>How to join the Dealership Program?</h2>
        <b>There are two ways to be a Dealer:</b>
        <ol>
            <li>Cumulative purchase within 3 months.  
                The next purchase, you will enjoy awesome discount from SRP DEALER RATE.
            </li>
            <li>
                Accomplished 5 Rewards Card.  Mechanics of the Rewards Card.
                <ul style="margin:0px;">
                    <li>Rewards card is for Walk-in customers only.</li>
                    <li>Each Rewards Card has 12 boxes to be stamped.</li>
                    <li>Every 500 purchase entitles the bearer a stamp.</li>
                    <li>Subsequent 12 stamps entitles the bearer free: 
                        <ol>
                            <li>1 pack of &nbsp;<em>Chicken Ham 225g</em></li>
                            <li>1 pack of &nbsp;<em>Chorizo Pinoy 200g</em></li>
                            <li>1 pack of &nbsp;<em>Luncheon Meat 225g</em></li>
                            <li>1 pack of &nbsp;<em>IQF Lumpia Shanghai 200g</em></li>
                            <li>1 pack of &nbsp;<em>Royal Hotdog 250g</em></li>
                        </ol>
                    </li>
                </ul>
            </li>
        </ol>
    </div>
    <div class="container">
        <h2>Are you open for Franchising?</h2>
        Not yet.  We are still finalizing some areas.        
    </div>
    <div id="outlets" class="container">
        <h2>Where are your Factory Outlets Located?</h2>
        <div style="float:left;">
            Check out our different
            <?php
            echo $this->Html->link('Factory Outlets', 
                    array('controller' => 'pages', 'action' => 'outlets'), 
                    array('style' => 'padding:0 5px 0 5px;', 'escape' => false));
            ?>
             located across Cebu.
        </div>
        <div style="float:left;display:none;">
            <ul>
                <li>
                    <b>Paknaan Factory Outlet</b><br />
                    S.E. Jayme St. Paknaan., Mandaue City<br />
                    (032) 343 7115 to 18; (032) 420 6584; (0923) 749 9551<br />
                </li>
            </ul>
            <ul>
                <li>
                    <b>Leon Kilat Factory Outlet</b><br />
                    Leon Kilat St., Cebu City<br />
                    (032) 256 1360; 255 5096<br />
                </li>
            </ul>
            <ul>
                <li>
                    <b>Carbon Factory Outlet</b><br />
                    Unit 2 Carbon Cebu City<br />
                    (0922) 820 6585<br />
                </li>
            </ul>
            <ul>
                <li>
                    <b>Fuente Osmeña Factory Outlet</b><br />
                    Gen. Maxilom Ave. Cebu City<br />
                    (032) 253 8997; 255 0041<br />
                </li>
            </ul>
        </div>
        <div style="float:left;display:none;">
            <ul>
                <li>
                    <b>Tabunok Factory Outlets</b><br />
                    Tabunok Talisay City<br /> (Across St. Joseph Church)<br />
                    
                    (0932) 630 0830; (0916) 219 5562; (0925) 506 2538
                </li>
            </ul>
            <ul>
                <li>
                    <b>Lapu-Lapu Factory Outlet</b><br />
                    Lapu-lapu City, Near Public Market, <br />Across Jollibee Radaza Plaza<br />
                    (0922) 746 9266
                </li>
            </ul>
            <ul>
                <li>
                    <b>Ilo-ilo Factory Outlet</b><br />
                    Rizal St., Brgy Pala-Pala, Iloilo City <br />
                    (033) 330 2937
                </li>
            </ul>
        </div>
        <br style="clear:both">
    </div>
    <div class="container">
        <h2>How much discount can we get when we buy in the Factory Outlets?</h2>
        <ul>
            <li>
                WALK-IN Customers: Cebu -15% to 10% discount from SRP.<br />
                <span style="padding-left:25px;">Provincial VIS-MIN -5% to 10% discount from SRP.</span>
            </li>
            <li>
                DEALER Customers: Cebu -20% discount from SRP.<br />
                <span style="padding-left:25px;">Provincial VIS-MIN -15% discount from SRP.</span>
            </li>
        </ul>
        <span style="font-style: italic;padding-left:40px;color:#cc0000;">NOTE: Discounting applies to regular products Only.</span>
    </div>
    <div id="rewards" class="container">
        <h2>How to Avail the King's Rewards Card?</h2>
        <ul>
            <li>Visit any King's Quality Foods Inc. Factory Outlets.</li>
            <li>Rewards card is for Walk-in customers only.</li>
            <li>Each Rewards Card has 12 boxes to be stamped.</li>
            <li>Every 500 purchase entitles the bearer a stamp.</li>
            <li>Subsequent 12 stamps entitles the bearer free:
                <ol>
                    <li>1 pack of &nbsp;<em>Chicken Ham 225g</em></li>
                    <li>1 pack of &nbsp;<em>Chorizo Pinoy 200g</em></li>
                    <li>1 pack of &nbsp;<em>Luncheon Meat 225g</em></li>
                    <li>1 pack of &nbsp;<em>IQF Lumpia Shanghai 200g</em></li>
                    <li>1 pack of &nbsp;<em>Royal Hotdog 250g</em></li>
                </ol>
            </li>
        </ul>
    </div>
    <div id="wheretobuy" class="container">
        <h2>Where can I buy King's Quality Foods Inc products?</h2>
        <ul>
            <li>At any Cebu Supermarkets.</li>
            <li>All Cebu and Out-of-town<?php
            echo $this->Html->link('Factory Outlets', 
                    array('controller' => 'pages', 'action' => 'outlets'), 
                    array('style' => 'padding:0 5px 0 5px;', 'escape' => false));
            ?>.</li>
        </ul>
    </div>
</div>

