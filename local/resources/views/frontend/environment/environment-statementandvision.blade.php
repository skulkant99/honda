<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')

</head>
<body>
<div class="container-fluid environment_page overflow-container">
    @include('../frontend.inc_menu')
    <section class="row">
        <figure class="col-12 banner_inside" data-aos="fade-down">
            <img src="{{ asset('local/public/state_img') }}/{{$banner->banner_img}}">
            <hgroup class="head_statementandvision">
                <h2>@lang('message.HONDAENVIRONMENT')</h2>
                <h1>@lang('message.StatementAndVision')</h1>
            </hgroup>
            <figcaption class="ev_toplink" data-aos="fade-down">
                <div>
                    <a href="#EnironmentStatement"><img class="svg" src="images/green-earth.svg">{{$detail1->header}}</a>
                </div><div>
                    <a href="#EnironmentSafetyVision"><img class="svg" src="images/plant.svg">{{$detail2->header}}</a>
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
                        <h1>{{$detail1->header}}</h1>
                    </hgroup>
                    <p><strong>{{$detail1->topic}}</strong></p>
                    <p><?php echo $detail1->detail ?></p>
                    <p><strong>{{$detail1->topic2}}</strong>
                    <p><?php echo $detail1->detail2 ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="row bg_evvision EnironmentSafetyVision" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12 bg_evsafetyvision" data-aos="fade-down" data-aos-delay="200">
                    <img class="svg" src="images/plant.svg">
                    <h1>{{$detail2->header}}</h1>
                    <h2>{{$detail2->topic}}</h2>
                    <p><?php echo $detail1->detail ?></p>
                </div>
            </div>
        </div>
    </section>
    @include('../frontend.inc_footer')
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