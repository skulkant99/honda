<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
<?php require('inc_header.php'); ?>
</head>
<body>
<div class="container-fluid environment_page overflow-container">
    <?php require('inc_menu.php'); ?>
    <section class="row">
        <figure class="col-12 banner_inside" data-aos="fade">
            <img src="images/banner_evtripplezero.jpg">
        </figure>
    </section>
    <section class="row">
        <div class="container" data-aos="fade-down" data-aos-delay="200">
            <div class="row">
                <div class="col-12 evtripplezero_head">
                    <hgroup>
                        <h2>Honda</h2>
                        <h1>Triple Zero Approach</h1>
                        <p>Honda has adopted Triple Zero as a concept unifying the three areas where we aspire to bring impacts down to zero: climate change, energy, and resource use. By applying this concept to our business operations, we aspire to realizing a society with zero environmental impact.</p>
                    </hgroup>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row item_tripple_zero zeroingco2">
                <figure class="col-12 col-lg-6" data-aos="fade-right">
                    <img src="images/img_tripple_co2.jpg">
                </figure>
                <figcaption class="col-12 col-lg-6" data-aos="fade-left">
                    <img class="svg" src="images/carbon-dioxide.svg">
                    <h1>Zeroing CO2 emissions using renewable energy</h1>
                    <p>To address climate change issues, Honda is striving to eliminate CO2 emissions in products and business activities in the future by utilizing renewable energy.</p>
                </figcaption>
            </div>
            <div class="row item_tripple_zero zeroenergyrisks">
                <figure class="col-12 col-lg-6" data-aos="fade-right">
                    <img src="images/img_tripple_solarcell.jpg">
                </figure>
                <figcaption class="col-12 col-lg-6" data-aos="fade-left">
                    <img class="svg" src="images/solar-cell.svg">
                    <h1>Zeroing energy risk</h1>
                    <p>To address “energy issues,” Honda is striving to eliminate energy risks in the future, such as those caused by a dependence on fossil fuels.</p>
                </figcaption>
            </div>
            <div class="row item_tripple_zero zeroingresource">
                <figure class="col-12 col-lg-6" data-aos="fade-right">
                    <img src="images/img_tripple_reuse.jpg">
                </figure>
                <figcaption class="col-12 col-lg-6" data-aos="fade-left">
                    <img class="svg" src="images/recycling.svg">
                    <h1>Zeroing resource and disposal risk</h1>
                    <p>To address the need for “efficient utilization of resources,” Honda is striving to eliminate risks across the entire product life cycle, from the resource procurement stage to the used product recovery and disposal stages.</p>
                </figcaption>
            </div>
        </div>
    </section>
    <?php require('inc_footer.php'); ?>
</div>
    
<script>
$(document).ready(function(){
    $('.menu_environment li:nth-child(4)').addClass('active');
    if(window.location.hash) {
        var evitpzlink = window.location.hash.substring(1);
        $("html, body").animate({ scrollTop: $( "."+evitpzlink ).offset().top - $('.topbar').height() }, 1000);
    }
});
</script>

</body>
</html>