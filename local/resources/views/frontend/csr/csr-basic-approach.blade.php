<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')
</head>
<body>
<div class="container-fluid csr_page overflow-container">
    @include('../frontend.inc_menu')
    <section class="row bg_csrbasicapproach" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 img_csrbasicappro">
                    <figure>
                        <img src="{{ asset('local/public/backend/environment_image') }}/{{$image->image}}">
                    </figure>
                </div>
                <div class="col-12 col-md-9 detail_csrbasicappro">
                    <hgroup>
                        <h2>Honda</h2>
                        <h1>{{$detail->topic}}</h1>
                    </hgroup>
                   {!!($detail->detail)!!}
                </div>
            </div>
        </div>
    </section>
    @include('../frontend.inc_footer')
</div>
    
<script>
$(document).ready(function(){
    $('.bg_csrbasicapproach').css('padding-top', $('.topbar').height()+100);
    $('.menu_csr li:nth-child(3)').addClass('active');
});
</script>

</body>
</html>