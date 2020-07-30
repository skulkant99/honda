<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('frontend.inc_header')
</head>
<body>
<div class="container-fluid" data-aos="fade">
    @include('frontend.inc_menu')
    <?php if(!empty(@$sRow)){ ?>
    <section class="row bg_hlnews" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <figure class="col-12 col-lg-6 news_img_inside">
                    <div id="slider" class="flexslider">
                      <ul class="slides">
                        <li>
                          <img src="{{ asset('local/public/news_img') }}/{{$sRow->news_img}}" />
                        </li>

                        <?php if(!empty(@$sImg)){ ?>

                          @foreach($sImg as $r)
                          <li>
                            <img src="{{ asset('local/public/news_img') }}/{{$r->gal_img}}" />
                          </li>
                          @endforeach

                       <?php } ?>

                    </div>
                    <div id="carousel" class="flexslider">
                      <ul class="slides">
                        <li>
                          <img src="{{ asset('local/public/news_img') }}/{{$sRow->news_img}}" />
                        </li>

                         <?php if(!empty(@$sImg)){ ?>

                          @foreach($sImg as $r)
                          <li>
                            <img src="{{ asset('local/public/news_img') }}/{{$r->gal_img}}" />
                          </li>
                          @endforeach
                        
                        <?php } ?>

                      </ul>
                    </div>
                </figure>
                <figcaption class="col-12 col-lg-6 news_detail_inside">
                    <h1>{{$sRow->news_topic}}</h1>
                    <div class="newsdate_detail">{{$sRow->news_post_time}}</div>
                    <div class="share_news_detail"><span>Share</span><a href="#"><img src="../images/facebook.svg"></a><a href="#"><img src="../images/twitter.svg"></a></div>
                    <?php echo $sRow->news_cont ?>
                </figcaption>
            </div>
        </div>
    </section>
    <section class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 news_detail_news">
                  <?php echo $sRow->news_detail ?>
                </div>
            </div>
        </div>
    </section>
  <?php }else{
    ?>
      <section class="row bg_hlnews" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <figure class="col-12 col-lg-6 news_img_inside">
                    <div id="slider" class="flexslider" style="font-size: 16px;padding: 5%;">
                      <ul class="">
                        <li>
                          This News's detail is coming soon..
                        </li>
                    </div>
                    <div id="carousel" class="flexslider">
                      <ul class="slides">
                  
                      </ul>
                    </div>
                </figure>
                <figcaption class="col-12 col-lg-6 news_detail_inside">
                    <div class="share_news_detail"><span>Share</span><a href="#"><img src="../images/facebook.svg"></a><a href="#"><img src="../images/twitter.svg"></a></div>
                </figcaption>
            </div>
        </div>
    </section>
    <section class="row">
        <div class="container">
            <div class="row">
                <div class="col-12 news_detail_news">
                </div>
            </div>
        </div>
    </section>
    <?php
  } ?>
   @include('frontend.inc_footer')
</div>

    
<script>
$(window).on("load",function(){
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 130,
    itemMargin: 10,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});   
</script>    

    
</body>
</html>