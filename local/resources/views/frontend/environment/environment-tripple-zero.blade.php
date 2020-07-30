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
        <figure class="col-12 banner_inside" data-aos="fade">
            <img src="{{ asset('local/public/backend/environment_image') }}/{{$banner->image}}">
        </figure>
    </section>
    <section class="row">
        <div class="container" data-aos="fade-down" data-aos-delay="200">
            <div class="row">
                <div class="col-12 evtripplezero_head">
                    <hgroup>
                        <h2>Honda</h2>
                        <h1>{{$header->header}}</h1>
                        <p>{!!($header->content)!!}</p>
                    </hgroup>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row item_tripple_zero zeroingco2">
                <figure class="col-12 col-lg-6" data-aos="fade-right">
                    <img src="{{ asset('local/public/backend/triple_zero') }}/{{$detail_img->image}}">
                </figure>
                <figcaption class="col-12 col-lg-6" data-aos="fade-left">
                    <img class="svg" src="images/carbon-dioxide.svg">
                    <h1>{{$detail->topic}}</h1>
                    <p>{!!($detail->content)!!}</p>
                </figcaption>
            </div>
            <div class="row item_tripple_zero zeroenergyrisks">
                <figure class="col-12 col-lg-6" data-aos="fade-right">
                    <img src="{{ asset('local/public/backend/triple_zero') }}/{{$detail2_img->image}}">
                </figure>
                <figcaption class="col-12 col-lg-6" data-aos="fade-left">
                    <img class="svg" src="images/solar-cell.svg">
                    <h1>{{$detail2->topic}}</h1>
                    <p>{!!($detail2->content)!!}</p>
                </figcaption>
            </div>
            <div class="row item_tripple_zero zeroingresource">
                <figure class="col-12 col-lg-6" data-aos="fade-right">
                    <img src="{{ asset('local/public/backend/triple_zero') }}/{{$detail3_img->image}}">
                </figure>
                <figcaption class="col-12 col-lg-6" data-aos="fade-left">
                    <img class="svg" src="images/recycling.svg">
                    <h1>{{$detail3->topic}}</h1>
                    <p>{!!($detail3->content)!!}</p>
                </figcaption>
            </div>
        </div>
    </section>
    @include('../frontend.inc_footer')
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