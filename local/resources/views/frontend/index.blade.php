<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>

@include('frontend.inc_header')

</head>
<body>
<div class="container-fluid overflow-container">
    
    @include('frontend.inc_menu')

    <section class="row">
    	<div class="col-12 wrap_banner">
        	<div class="flexslider" data-aos="fade">
                <ul class="slides">
                    <li>
                        <img src="{{ asset('frontend/images/banner01.jpg') }}" />
                    </li>
                    <li>
                        <img src="{{ asset('frontend/images/banner01.jpg') }}" />
                    </li>
                    <li>
                        <img src="{{ asset('frontend/images/banner01.jpg') }}" />
                    </li>
                </ul>
          	</div>
            <div class="banner_caption" data-aos="fade-down">
                <hgroup>

                    <h2>{{ $sRow->cont_head }}</h2>
                    <h1>{{ $sRow->cont_title }}</h1>

                    <div class="wrap_banner_logo">
                        <a href="{{ URL('/environment') }}"><img src="{{ asset('frontend/images/fp_blueskies.png') }}" class="logo_hidexs"><img src="{{ asset('frontend/images/fp_blueskies_textblack.png') }}" class="logo_textblack">
                        </a><a href="{{ URL('/safety') }}"><img src="{{ asset('frontend/images/fp_sfe.png') }}">
                        </a><a href="{{ URL('/csr') }}"><img src="{{ asset('frontend/images/fp_tft.png') }}" class="logo_hidexs"><img src="{{ asset('frontend/images/fp_tft_textblack.png') }}" class="logo_textblack">
                        </a>
                    </div>
                </hgroup>
            </div>
        </div>
    </section>
    <section class="row" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-12 head_hp">
                    <h1>@lang('message.NewsUpdate')</h1><a href="{{ URL('/news') }}"><span>@lang('message.ViewAll')</span></a>
                </div>
            </div>
        </div>
        <div class="col-12 wrap_hpnews">
            <div class="newsslide">

                @foreach($sNews AS $r)
                <div class="item_news">
                    <figure>
                        <a href="{{ URL('/news-detail',$r->news_group) }}"><img src="{{ asset('local/public/news_img') }}/{{$r->news_img}}"></a>
                    </figure>
                    <figcaption>
                        <div class="date_news">{{date('d F Y',strtotime($r->news_post_time))}}
                            <div class="flag_news">
                                <span class="flag-icon flag-icon-nz"></span>
                            </div>
                        </div>

                        <h1 class="dotmaster">{{$r->news_topic}}</h1>
                        <a class="btn_readmore" href="{{ URL('/news-detail',$r->news_group) }}"><span></span><span></span><span></span><span></span>@lang('message.ReadMore') <i class="fas fa-long-arrow-alt-right"></i></a>
                    </figcaption>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="row">
        <figure class="col-12 col-md-6 fp_bottom_half" data-aos="fade-right">
            <img src="{{ asset('local/public/history_img') }}/{{$sHist->his_img_bag}} ">
            <figcaption>
                <div class="fp_img_ceo">
                    <img style="width: 50%; background-color: #FFFFFF" src="{{ asset('local/public/history_img') }}/{{$sHist->his_img_pro1}}">
                    {{-- 
                    {{ asset('local/public/history_img') }}/{{$sHist->his_img_pro2}} 
                    {{ asset('frontend/images/ceo.jpg') }}
                    --}}
                </div>
                <div class="fp_ceo_name">{{$sHist->his_name}}</div>
                <h1><span>@lang('message.MESSAGE')</span>{{$sHist->his_pos}}</h1>
                <div class="dotmaster">
                    <?php echo substr($sHist->his_desc, 0, 200); ?>
                </div>
                
                {{-- <br> --}}
                {{-- <p class="dotmaster">Welcome to the renewed Asia & Oceania Sustainability Website. This website has been updated with 
Honda’s activities continuing from the previous year and new activities begun in 2016 in the areas of 
the environment, safety and philanthropy in the Asia & Oceania (A&O) Region.</p> --}}
                <a class="btn_readmore" href="{{ URL('/message-from-president') }}"><span></span><span></span><span></span><span></span>
                    @lang('message.ReadMore')  <i class="fas fa-long-arrow-alt-right"></i></a>
            </figcaption>
        </figure>
        <figure class="col-12 col-md-6 fp_bottom_half fp_bottom_half_right" data-aos="fade-left">
            <img src="{{ asset('local/public/sus_img') }}/{{$sSus->sus_img_bag}}">
            <figcaption>
                <div class="fp_img_ceo">
                    <img src="{{ asset('local/public/sus_img') }}/{{$sSus->sus_img}}">
                </div>
                <h1>{{$sSus->sus_topic}}</h1>
                <div class="dotmaster">
                    <?php echo substr($sSus->sus_detail, 0, 300) ; ?>
                </div>
                {{-- <p class="dotmaster">The Honda Philosophy forms the values shared by all Honda Group companies and all of their 
associates and is the basis for Honda’s corporate activities and the associates’ behavior and 
decision-making. In order to achieve both the creation of growth opportunities for the Company 
and a sustainable society, Honda has set striving to be “a company that society wants to exist”</p> --}}
                <a class="btn_readmore" href="{{ URL('/honda-sustainability') }}"><span></span><span></span><span></span><span></span>@lang('message.ReadMore') <i class="fas fa-long-arrow-alt-right"></i></a>
            </figcaption>
        </figure>
    </section>

    @include('frontend.inc_footer')
    
</div>

<script type="text/javascript">
$(function(){
  SyntaxHighlighter.all();
});
$(window).on("load",function(){
    $('.flexslider').flexslider({
        animation: "slide",
        directionNav: false,
        controlNav: true,
        start: function(slider){
            $('body').removeClass('loading');
            $(".dotmaster").trigger("update.dot");
            AOS.init();
        }
    });
});
</script>
    
<script>
$(document).ready(function(){
    var ncspd = $('.container').offset().left + 15;
    var cppd = ncspd+'px';
    
    $('.newsslide').on('init', function(event, slick, direction){
        $(".dotmaster").trigger("update.dot");
    }).slick({
      centerMode: true,
      infinite: true,
      centerPadding: cppd,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      initialSlide : 2,
      autoplaySpeed: 6000,
      prevArrow: '<button class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
      nextArrow: '<button class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            //centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            //centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
});    
</script>

</body>
</html>