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
        <figure class="col-12 banner_inside" data-aos="fade-down">
            <img src="images/imgev_statementandvision.jpg">
            <hgroup class="head_statementandvision">
                <h2>HONDA ENVIRONMENT</h2>
                <h1>Statement and Vision</h1>
            </hgroup>
            <figcaption class="ev_toplink" data-aos="fade-down">
                <div>
                    <a href="#EnironmentStatement"><img class="svg" src="images/green-earth.svg">Environment Statement</a>
                </div><div>
                    <a href="#EnironmentSafetyVision"><img class="svg" src="images/plant.svg">Environment And Safety Vision</a>
                </div>
            </figcaption>
        </figure>
    </section>
    <section class="row bg_evstatement EnironmentStatement" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-down" data-aos-delay="200">
                    <hgroup>
                        <h2>Honda</h2>
                        <h1>Environment Statement</h1>
                    </hgroup>
                    <p><strong>We should pursue our daily business interests under the following principles, as a responsible member of society whose task lies in the preservation of the global environment.</strong></p>
                    <p>As a responsible member of society whose task lies in the preservation of the global environment, the company will make every effort to contribute to human health and the preservation of the global environment in each phase of its corporate activity. Only in this way will we be able to count on a successful future not only for our company, but for the entire world.</p>
                    <p><strong>We should pursue our daily business interests under the following principles:</strong>
                    <p>• We will make efforts to recycle materials and conserve resources and energy at every stage of our products’ life cycle from research, design, production and sales, to services and disposal.<br>
                    • We will make every effort to minimize and find appropriate methods to dispose of waste and contaminants that are produced through the use of our products, and in every stage of the life cycle of these products.<br>
                    • As both a member of the company and of society, each associate will focus on the importance of making efforts to preserve human health and the global environment, and will do his or her part to ensure that the company as a whole acts responsibly.<br>
                    • We will consider the influence that our corporate activities have on the local environment and society, and endeavor to improve the social standing of the company.</p>
                    <p>Established and announced in June 1992</p>
                </div>
            </div>
        </div>
    </section>
    <section class="row bg_evvision EnironmentSafetyVision" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12 bg_evsafetyvision" data-aos="fade-down" data-aos-delay="200">
                    <img class="svg" src="images/plant.svg">
                    <h1>Honda Environment And Safety Vision</h1>
                    <h2>“Realizing the joy and freedom of mobility and sustainable society where people can enjoy life”</h2>
                    <p>In working to achieve this vision, the following objectives shape our environmental initiatives around the world.</p>
                    <p>At each stage of its products’ life cycles (products, corporate activities), Honda aims to
Minimize the use of fossil fuel and resources newly recovered from the Earth.
Minimize environmental impacts, including greenhouse gas emissions.<br>
Honda aims to reduce greenhouse gas emissions from Honda products used for mobility and in people’s everyday lives down to zero.

</p>
                </div>
            </div>
        </div>
    </section>
    <?php require('inc_footer.php'); ?>
</div>
    
<script>
$(document).ready(function(){
    if (Modernizr.mq('(max-width: 767px)')) {
    
    } else{
        $('.bg_evvision .row').css('min-height', $(window).height() - 40);
    }
    $('.menu_environment li:nth-child(3)').addClass('active');
    if(window.location.hash) {
        var evtoplink = window.location.hash.substring(1);
        if (Modernizr.mq('(max-width: 767px)')) {
            $("html, body").animate({ scrollTop: $( "."+evtoplink ).offset().top - $('.topbar').height() }, 1000);
        } else{
            $("html, body").animate({ scrollTop: $( "."+evtoplink ).offset().top }, 1000);
        }
    }
    $('.ev_toplink a').click(function (event) {
        var evtoplink = $(this).attr('href').split('#')[1];
        if (Modernizr.mq('(max-width: 767px)')) {
            $("html, body").animate({ scrollTop: $( "."+evtoplink ).offset().top - $('.topbar').height() }, 1000);
        } else{
            if (  evtoplink == 'EnironmentStatement' ) {
                $("html, body").animate({ scrollTop: $( "."+evtoplink ).offset().top - $('.topbar').height() }, 1000);
            } else{
                $("html, body").animate({ scrollTop: $( "."+evtoplink ).offset().top }, 1000);
            }
        }
    });
});
</script>

</body>
</html>