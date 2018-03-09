<?php $this->pageTitle = 'Careers'; ?>
<div class="container-fluid first-container bg-red">
    <div class="container" style="margin-right: 65px;">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><?=$this->Html->link('Home', $this->webroot);?></li>
                    <li class="bold">Careers</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 white">
                <h1 style="margin:5px 0px;">Looking for a Job? Work with us!</h1>
                <span style="margin-left:100px;">
                    
                </span><br /><br />
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-darkgray">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding:10px;">
                &nbsp;
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding:10px;">
                <h2>KINGS QUALITY FOODS (CEBU) INC.</h2>
                <p>We are a multi-brand food processing and distribution organization, 
                synonymous with quality and affordability.  <br />Along with the passion to serve great-tasting 
                and quality food products, is the ultimate goal to uplift the lives of our people; the key to our success…</p>
                <p>Join the highly synergized team of King’s Quality Foods where people matter
                and ideas valued…  <br />We need the following highly-driven individuals to complete our team:</p>
            </div>
        </div>
    </div>
</div>

<?php $count = 0; ?>
<?php if (isset($posts) && count($posts) > 0): ?>
    <?php for ($i = 0; $i < count($posts); $i++) : // ($posts as $post): ?>
        <?php if ($i > 0): ?>
            <hr />
            <div class="container-fluid">
        <?php else : ?>
            <div class="container-fluid">
        <?php endif; ?>
            <div class="container">
                <h2><?= $posts[$i]['Post']['title'] ?></h2>
                <?= $posts[$i]['Post']['body'] ?>
            </div>
        </div>
    <?php endfor; ?>
<?php else: ?>
    <div style="width:100%;padding-bottom: 20px;text-align:center;">
        <span style="font-style:italic;color:red;">Sorry, no job openings as of the moment.</span>
    </div>
<?php endif; ?>


<hr>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding:10px;">
                <h3 style="font-weight: bold">How to Apply</h3>
                <p>Please e-mail resume to <a href="mailto:jd.maglasang@kingsfoods.com.ph">jd.maglasang@kingsfoods.com.ph</a>
                <br /><br /><strong>Or send to:</strong><br />
                King’s Quality Foods, Inc.<br />
                c/o The Human Resource Department<br />
                SE Jayme St., Paknaan, Mandaue City<br /><br />

                Contact Number: (032) 343-7115 local 124</p>
            </div>
        </div>
    </div>
</div>
                
