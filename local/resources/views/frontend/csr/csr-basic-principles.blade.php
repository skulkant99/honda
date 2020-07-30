<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')
</head>
<body>
<div class="container-fluid csr_page overflow-container">
    @include('../frontend.inc_menu')
    <section class="row bg_csrbasicprinciples" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12 head_csrprinciples">
                    <hgroup>
                        <h2>Honda</h2>
                        <h1>{{$topic->topic}}</h1>
                        <img src="{{ asset('local/public/backend/environment_image') }}/{{$image->image}}">
                    </hgroup>
                </div>
            </div>
        </div>
    </section>
    <section class="row" data-aos="fade-down">
        <div class="container">
            <div class="row row_csrcircleinside">
                <div class="col-12 wrap_csrcircleinside">
                    <div class="item_csrcircleinside">
                        <figure><img src="images/icon_csrphilosophy.svg"><figcaption>{{$detail->topic}}</figcaption>
                        </figure>
                    </div><figcaption class="item_csrcircleinside_detail">
                            <h1>{{$detail->topic}}</h1>
                        {!!($detail->detail)!!}
                        </figcaption>
                </div>
                <div class="col-12 wrap_csrcircleinside">
                    <div class="item_csrcircleinside">
                        <figure><img src="images/icon_csr_objective.svg"><figcaption>{{$detail2->topic}}</figcaption>
                        </figure>
                    </div><figcaption class="item_csrcircleinside_detail">
                            <h1>{{$detail2->topic}}</h1>
                                    {!!($detail2->detail)!!}
                        </figcaption>
                </div>
                <div class="col-12 wrap_csrcircleinside">
                    <div class="item_csrcircleinside">
                        <figure><img src="images/icon_csractivity.svg"><figcaption>{{$detail3->topic}}</figcaption>
                        </figure>
                    </div><figcaption class="item_csrcircleinside_detail">
                            <h1>{{$detail3->topic}}</h1>
                            {!!($detail3->detail)!!}
                        </figcaption>
                </div>
                <div class="col-12 wrap_csrcircleinside">
                    <div class="item_csrcircleinside">
                        <figure><img src="images/icon_csrfield.svg"><figcaption>{{$detail4->topic}}</figcaption>
                        </figure>
                    </div><figcaption class="item_csrcircleinside_detail">
                            <h1>{{$detail4->topic}}</h1>
                                  {!!($detail4->detail)!!}
                        </figcaption>
                </div>
            </div>
        </div>
    </section>
    @include('../frontend.inc_footer')
</div>
    
<script>
$(document).ready(function(){
    $('.bg_csrbasicprinciples').css('padding-top', $('.topbar').height()+50);
    $('.menu_csr li:nth-child(4)').addClass('active');
});
</script>

</body>
</html>