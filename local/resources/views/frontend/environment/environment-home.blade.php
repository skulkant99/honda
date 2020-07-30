<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')
</head>
<body>
<div class="container-fluid environment_page overflow-container">
  @include('../frontend.inc_menu')
    <section class="row" data-aos="fade">
    	<div class="col-12 wrap_video">
            <div id="player"></div>
        </div>
    </section>
    <section class="row bg_evfp_direction" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 evfp_direction">
                    <div class="head_evfp"><h1>@lang('message.Direction')</h1></div>
                    <figure class="img_evdirection">
                        <a href="{{ URL('/environment-direction') }}"><img src="{{ asset('local/public/direc_img') }}/{{$direc->direc_img}}"></a>
                        <figcaption>
                            <p><?php echo $direc->direc_topic; ?></p>
                            <a class="btn_readmore" href="{{ URL('/environment-direction') }}"><span></span><span></span><span></span><span></span>@lang('message.ReadMore')  <i class="fas fa-long-arrow-alt-right"></i></a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="head_evfp"><h1>@lang('message.StatementAndVision')</h1></div>
                    <div class="item_evfp_stm_safty">
                        <figure>
                            <img src="images/green-earth.svg">
                        </figure><figcaption>
                            <h1>{{$detail01->header}}</h1>
                            <p><?php echo $detail01->topic; ?></p>
                            <a class="btn_readmore" href="{{ URL('/environment-statementandvision') }}"><span></span><span></span><span></span><span></span>@lang('message.ReadMore')  <i class="fas fa-long-arrow-alt-right"></i></a>
                        </figcaption>
                    </div>
                    <div class="item_evfp_stm_safty itemfpsafty">
                        <figure>
                            <img src="images/plant.svg">
                        </figure><figcaption>
                            <h1>{{$detail02->header}}</h1>
                            <p><?php echo $detail02->topic; ?></p>
                            <a class="btn_readmore" href="{{ URL('/environment-statementandvision') }}"><span></span><span></span><span></span><span></span>@lang('message.ReadMore')  <i class="fas fa-long-arrow-alt-right"></i></a>
                        </figcaption>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12 head_fptpzero">
                    <h1>@lang('message.TripleZeroApproach')</h1>
                </div>
            </div>
            <div class="row row_fptripplezero">
                <div class="col-12 col-md-4 item_fptripplezero">
                    <a href="{{ URL('/environment-tripple-zero') }}#zeroingco2">
                        <figure>
                            <img src="{{ asset('local/public/backend/triple_zero') }}/{{$detail_img->image}}">
                            <img class="svg" src="images/carbon-dioxide.svg">
                        </figure>
                        <figcaption>
                            <h1>{{$detail->topic}}</h1>    
                        </figcaption>
                    </a>
                </div>
                <div class="col-12 col-md-4 item_fptripplezero">
                    <a href="{{ URL('/environment-tripple-zero') }}#zeroenergyrisks">
                        <figure>
                            <img src="{{ asset('local/public/backend/triple_zero') }}/{{$detail2_img->image}}">
                            <img class="svg" src="images/solar-cell.svg">
                        </figure>
                        <figcaption>
                            <h1>{{$detail2->topic}}</h1>    
                        </figcaption>
                    </a>
                </div>
                <div class="col-12 col-md-4 item_fptripplezero">
                    <a href="{{ URL('/environment-tripple-zero') }}#zeroingresource">
                        <figure>
                            <img src="{{ asset('local/public/backend/triple_zero') }}/{{$detail3_img->image}}">
                            <img class="svg" src="{{ asset('frontend/images/recycling.svg') }}">
                        </figure>
                        <figcaption>
                            <h1>{{$detail3->topic}}</h1>    
                        </figcaption>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="row">
        <a href="{{ URL('/environment-slogan') }}" class="col-12 col-md-4 fp_evr_slogan" data-aos="fade-right">
            <figure><img src="{{ asset('local/public/env_img') }}/{{$news1->menu_img}}"><img class="logo_fp_evr_slogan" src="{{ asset('frontend/images/logo_environment.png') }}"></figure>
            <figcaption>
                <h1><?php echo $news1->menu_topic; ?></h1>
                <p>{{$news1->menu_cont}}</p>
            </figcaption>
        </a>
        <div class="col-12 col-md-8 fp_evr_impact" data-aos="fade-left">
            <a href="{{ URL('/environment-impact') }}">
                <h1>{{$news2->menu_topic}}<span>{{$news2->menu_cont}}</span></h1>
                <div class="btn_readmore"><span></span><span></span><span></span><span></span>View detail <i class="fas fa-long-arrow-alt-right"></i></div>
            </a>
        </div>
    </section>
    @include('../frontend.inc_footer')
</div>
    
<script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '100%',
          width: '100%',
          // videoId: '9wDwfksBd3Y',
          videoId: '<?php echo $vdo->vdo_link ?>',
            loop: true,
            playerVars: { 'autoplay': 1, 'controls': 0, 'loop': 1 },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
         if(event.data == YT.PlayerState.ENDED){
            player.seekTo(0);
        }
      }
    </script>

</body>
</html>