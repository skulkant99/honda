<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('frontend.inc_header')
</head>
<body>
<div class="container-fluid" data-aos="fade">
    @include('frontend.inc_menu')
    <section class="row bg_hlnews" data-aos="fade-down">
    	<div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade" data-aos-delay="200">
                    <div class="newshlslide">
                        @foreach($sNews2 AS $r2)
                        <figure class="item_hl_news">
                            <a href="{{ URL('/news-detail',$r2->news_group) }}" class="hl_news_img">
                                <img src="{{ asset('local/public/news_img') }}/{{$r2->news_img}}">
                            </a><figcaption class="hl_news_detail">
                                <h2>HILIGHT NEWS UPDATE</h2>
                                <div class="hl_newsdate">{{date('d F Y',strtotime($r2->news_post_time))}}
                                 <?php 
                            $ct=$r2->news_country;
                            if ($ct==0) {
                                $ct=10;
                            }
                            if ($ct==1) {
                                $ct_class='flag-icon-au';
                            }elseif ($ct==2) {
                                $ct_class='flag-icon-in';
                            }elseif ($ct==3) {
                                $ct_class='flag-icon-id';
                            }elseif ($ct==4) {
                                $ct_class='flag-icon-kr';
                            }elseif ($ct==5) {
                                $ct_class='flag-icon-my';
                            }elseif ($ct==6) {
                                $ct_class='flag-icon-nz';
                            }elseif ($ct==7) {
                                $ct_class='flag-icon-pk';
                            }elseif ($ct==8) {
                                $ct_class='flag-icon-ph';
                            }elseif ($ct==9) {
                                $ct_class='flag-icon-tw';
                            }elseif ($ct==10) {
                                $ct_class='flag-icon-th';
                            }elseif ($ct==11) {
                                $ct_class='flag-icon-vn';
                            }elseif ($ct==12) {
                                $ct_class='flag-icon-eu';
                            }elseif ($ct==13) {
                                $ct_class='flag-icon-us';
                            }elseif ($ct==14) {
                                $ct_class='flag-icon-us';
                            }elseif ($ct==15) {
                                $ct_class='flag-icon-jp';
                            }elseif ($ct==16) {
                                $ct_class='flag-icon-cn';
                            }
                            ?>
                          <span  align="right" class="flag-icon {{$ct_class}}"></span>  </div>
                                <h1 class="dotmaster">{{$r2->news_topic}}</h1>
                                <p class="dotmaster"><?php echo $r2->news_cont ?></p>
                                <a class="btn_readmore" href="{{ URL('/news-detail',$r2->news_group) }}"><span></span><span></span><span></span><span></span>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </figcaption>
                        </figure>
                        @endforeach
                        {{-- <figure class="item_hl_news">
                            <a href="{{ URL('/news-detail') }}" class="hl_news_img">
                                <img src="{{ asset('frontend/images/news01.jpg') }}">
                            </a><figcaption class="hl_news_detail">
                                <h2>HILIGHT NEWS UPDATE</h2>
                                <div class="hl_newsdate">04 October 2018</div>
                                <h1 class="dotmaster">Honda Clarity Series Earns Coalition for Clean Air 2018 California Air Quality Award</h1>
                                <p class="dotmaster">The Honda Clarity series was awarded the 2018 California Air Quality Award for Corporate 
            Environmental Stewardship by the Coalition for Clean Air for proving drivers can reduce or even 
            eliminate tailpipe emissions without sacrificing style comfort or performance. The Coalition...</p>
                                <a class="btn_readmore" href="{{ URL('/news-detail') }}"><span></span><span></span><span></span><span></span>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </figcaption>
                        </figure>
                        <figure class="item_hl_news">
                            <a href="{{ URL('/news-detail') }}" class="hl_news_img">
                                <img src="{{ asset('frontend/images/news01.jpg') }}">
                            </a><figcaption class="hl_news_detail">
                                <h2>HILIGHT NEWS UPDATE</h2>
                                <div class="hl_newsdate">04 October 2018</div>
                                <h1 class="dotmaster">Honda Clarity Series Earns Coalition for Clean Air 2018 California Air Quality Award</h1>
                                <p class="dotmaster">The Honda Clarity series was awarded the 2018 California Air Quality Award for Corporate 
            Environmental Stewardship by the Coalition for Clean Air for proving drivers can reduce or even 
            eliminate tailpipe emissions without sacrificing style comfort or performance. The Coalition...</p>
                                <a class="btn_readmore" href="{{ URL('/news-detail') }}"><span></span><span></span><span></span><span></span>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </figcaption>
                        </figure>
                        <figure class="item_hl_news">
                            <a href="{{ URL('/news-detail') }}" class="hl_news_img">
                                <img src="{{ asset('frontend/images/news01.jpg') }}">
                            </a><figcaption class="hl_news_detail">
                                <h2>HILIGHT NEWS UPDATE</h2>
                                <div class="hl_newsdate">04 October 2018</div>
                                <h1 class="dotmaster">Honda Clarity Series Earns Coalition for Clean Air 2018 California Air Quality Award</h1>
                                <p class="dotmaster">The Honda Clarity series was awarded the 2018 California Air Quality Award for Corporate 
            Environmental Stewardship by the Coalition for Clean Air for proving drivers can reduce or even 
            eliminate tailpipe emissions without sacrificing style comfort or performance. The Coalition...</p>
                                <a class="btn_readmore" href="{{ URL('/news-detail') }}"><span></span><span></span><span></span><span></span>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                            </figcaption>
                        </figure> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 head_news_inside">
                    <h1>NEWS UPDATE</h1>
                </div>
            </div>
            <div class="row row_news_inside">

                @foreach($sNews AS $r)
                <div class="col-12 col-md-4 item_news">
                    <figure>
                        <a href="{{ URL('/news-detail',$r->news_group) }}"><img src="{{ asset('local/public/news_img') }}/{{$r->news_img}}"></a>
                    </figure>
                    <figcaption>
                        <div class="date_news">{{date('d F Y',strtotime($r->news_post_time))}} <?php 
                            $ct=$r->news_country;
                            if ($ct==0) {
                                $ct=10;
                            }
                            if ($ct==1) {
                                $ct_class='flag-icon-au';
                            }elseif ($ct==2) {
                                $ct_class='flag-icon-in';
                            }elseif ($ct==3) {
                                $ct_class='flag-icon-id';
                            }elseif ($ct==4) {
                                $ct_class='flag-icon-kr';
                            }elseif ($ct==5) {
                                $ct_class='flag-icon-my';
                            }elseif ($ct==6) {
                                $ct_class='flag-icon-nz';
                            }elseif ($ct==7) {
                                $ct_class='flag-icon-pk';
                            }elseif ($ct==8) {
                                $ct_class='flag-icon-ph';
                            }elseif ($ct==9) {
                                $ct_class='flag-icon-tw';
                            }elseif ($ct==10) {
                                $ct_class='flag-icon-th';
                            }elseif ($ct==11) {
                                $ct_class='flag-icon-vn';
                            }elseif ($ct==12) {
                                $ct_class='flag-icon-eu';
                            }elseif ($ct==13) {
                                $ct_class='flag-icon-us';
                            }elseif ($ct==14) {
                                $ct_class='flag-icon-us';
                            }elseif ($ct==15) {
                                $ct_class='flag-icon-jp';
                            }elseif ($ct==16) {
                                $ct_class='flag-icon-cn';
                            }
                            ?>
                          <span  align="right" class="flag-icon {{$ct_class}}"></span>  </div>
                        <h1 class="dotmaster">{{$r->news_topic}}</h1>
                        <a class="btn_readmore" href="{{ URL('/news-detail',$r->news_group) }}"><span></span><span></span><span></span><span></span>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </figcaption>
                </div>
                @endforeach

                {{-- <div class="col-12 col-md-4 item_news">
                    <figure>
                        <a href="{{ URL('/news-detail') }}"><img src="{{ asset('frontend/images/news01.jpg') }}"></a>
                    </figure>
                    <figcaption>
                        <div class="date_news">04 October 2018</div>
                        <h1 class="dotmaster">Honda Joins with Cruise and General Motors to Build New Autonomous Vehicle</h1>
                        <a class="btn_readmore" href="{{ URL('/news-detail') }}"><span></span><span></span><span></span><span></span>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </figcaption>
                </div>
                <div class="col-12 col-md-4 item_news">
                    <figure>
                        <a href="{{ URL('/news-detail') }}"><img src="{{ asset('frontend/images/news01.jpg') }}"></a>
                    </figure>
                    <figcaption>
                        <div class="date_news">04 October 2018</div>
                        <h1 class="dotmaster">Honda Joins with Cruise and General Motors to Build New Autonomous Vehicle</h1>
                        <a class="btn_readmore" href="{{ URL('/news-detail') }}"><span></span><span></span><span></span><span></span>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </figcaption>
                </div>
                <div class="col-12 col-md-4 item_news">
                    <figure>
                        <a href="{{ URL('/news-detail') }}"><img src="{{ asset('frontend/images/news01.jpg') }}"></a>
                    </figure>
                    <figcaption>
                        <div class="date_news">04 October 2018</div>
                        <h1 class="dotmaster">Honda Joins with Cruise and General Motors to Build New Autonomous Vehicle</h1>
                        <a class="btn_readmore" href="{{ URL('/news-detail') }}"><span></span><span></span><span></span><span></span>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </figcaption>
                </div>
                <div class="col-12 col-md-4 item_news">
                    <figure>
                        <a href="{{ URL('/news-detail') }}"><img src="{{ asset('frontend/images/news01.jpg') }}"></a>
                    </figure>
                    <figcaption>
                        <div class="date_news">04 October 2018</div>
                        <h1 class="dotmaster">Honda Joins with Cruise and General Motors to Build New Autonomous Vehicle</h1>
                        <a class="btn_readmore" href="{{ URL('/news-detail') }}"><span></span><span></span><span></span><span></span>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </figcaption>
                </div>
                <div class="col-12 col-md-4 item_news">
                    <figure>
                        <a href="{{ URL('/news-detail') }}"><img src="{{ asset('frontend/images/news01.jpg') }}"></a>
                    </figure>
                    <figcaption>
                        <div class="date_news">04 October 2018</div>
                        <h1 class="dotmaster">Honda Joins with Cruise and General Motors to Build New Autonomous Vehicle</h1>
                        <a class="btn_readmore" href="{{ URL('/news-detail') }}"><span></span><span></span><span></span><span></span>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </figcaption>
                </div>
                <div class="col-12 col-md-4 item_news">
                    <figure>
                        <a href="{{ URL('/news-detail') }}"><img src="{{ asset('frontend/images/news01.jpg') }}"></a>
                    </figure>
                    <figcaption>
                        <div class="date_news">04 October 2018</div>
                        <h1 class="dotmaster">Honda Joins with Cruise and General Motors to Build New Autonomous Vehicle</h1>
                        <a class="btn_readmore" href="{{ URL('/news-detail') }}"><span></span><span></span><span></span><span></span>Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </figcaption>
                </div> --}}
            </div>
            <div class="row">
                {{ $sNews->links() }}
                {{-- <div class="col-12 pagination_default">

                    <ul>
                        <li class="pnprev"><a href="#">«</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">»</a></li> 

                    </ul>
                </div>--}}
            </div>
        </div>
    </section>
    @include('frontend.inc_footer')
</div>

    
<script>
$(document).ready(function(){
    $('.newshlslide').on('init', function(event, slick, direction){
        $(".dotmaster").trigger("update.dot");
    }).slick({
        centerMode: false,
        infinite: true,
        centerPadding: '0',
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 6000,
        arrows : false,
        fade: true,
        cssEase: 'linear',
        speed: 500,
      //prevArrow: '<button class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
      //nextArrow: '<button class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
    });
});    
</script>
    
</body>
</html>