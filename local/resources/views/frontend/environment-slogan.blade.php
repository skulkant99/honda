<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')

<style>
.fancybox-slide--image{
    background-color: rgba(255,255,255,0.95);
}   
.bg_evslogan2{
    background-image: url({{ asset('local/public/backend/environment_image') }}/{{$image->image_bg}});
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background-attachment: fixed;
} 
</style>
</head>
<body>
<div class="container-fluid environment_page overflow-container">
    @include('../frontend.inc_menu')
    <section class="row bg_evslogan2">
        <div class="container" data-aos="fade-down" data-aos-delay="200">
            <div class="row">
                <div class="col-12 detail_evslogan">
                    <hgroup>
                        <h2>Honda environment</h2>
                        <h1>{{$detail->topic}}</h1>
                    </hgroup>
                    <a data-fancybox href="{{ asset('local/public/backend/environment_image') }}/{{$image->image}}"><img src="{{ asset('local/public/backend/environment_image') }}/{{$image->image}}"></a>
                    <p>{!!($detail->content)!!}</p>
                </div>
            </div>
        </div>
    </section>
    @include('../frontend.inc_footer')
</div>
    
<script>
$(document).ready(function(){
    $('.bg_evslogan .row').css('min-height', $(window).height());
    $('.detail_evslogan').css('margin-top', $('.topbar').height());
    $('.menu_environment li:nth-child(5)').addClass('active');
});
</script>

</body>
</html>