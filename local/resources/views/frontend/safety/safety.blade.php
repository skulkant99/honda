<!doctype html>
<html>
<head>
  <title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')
</head>
<body>
<div class="container-fluid safety_page overflow-container">
  @include('../frontend.inc_menu')
  <section class="row" data-aos="fade">
    <div class="col-12 wrap_video">
            <div id="player"></div>

      @foreach($sRowVideoBanner as $RowVideoBanner)
        <input type="hidden" id="video2" name="content" value="{{ $RowVideoBanner -> id_video}}">
        @endforeach
{{--      <iframe width="560" height="315" src="https://www.youtube.com/embed/fr0zTHbccro" frameborder="0"--}}
{{--              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
    </div>
  </section>
  <section class="row bg_fptopsafety" data-aos="fade-down">
    <div class="container">
      <div class="row row_fptop">
        <div class="col-12 col-md-5 safety_fpslogan">
          @foreach($sRowSlogans as $RowSlogans)
            <hgroup>
              <h2>{{$RowSlogans->topic}}</h2>
              <h1>{{$RowSlogans->topic2}}</h1>
              <h6>{{$RowSlogans->content}}</h6>
            </hgroup>
          @endforeach
          <div class="wrap_basic_approach">
            @foreach($sRowDetail as $RowDetail)
              <figure>
                <img
                  src="{{ URL::asset('local/public/images/Safety/BasicApproach/InsideDetails/Image/'.$RowDetail -> image.'')}}">
              </figure>
              <figcaption>
                <h1>{{$RowDetail -> topic}}</h1>
                <p>{{$RowDetail -> topic2}}</p>
                <a class="btn_readmore"
                   href="{{route('safety.basic-approach')}}"><span></span><span></span><span></span><span></span>@lang('message.ReadMore') <i
                    class="fas fa-long-arrow-alt-right"></i></a>
              </figcaption>
            @endforeach
          </div>
        </div>
        <div class="col-12 col-md-7 direction_fp">
          <h1>@lang('message.Direction')</h1>
          <div class="row">
            @foreach($sRowDirections as $RowDirections)

              <div class="col-12 col-md-4">
                <a href="#">
                  <figure>
                    <img
                      src="{{ URL::asset('local/public/images/Safety/Directions/DirecitonActivities/Image/'.$RowDirections -> image.'')}}">
                  </figure>
                  <figcaption>
                    <h1>{{$RowDirections->topic.' '.$RowDirections->topic2}}</h1>
                  </figcaption>
                </a>
              </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="row">
    <div class="col-12 bg_test_result">
      <div class="row">
        <div class="container">
          <div class="row fp_test_result">
            <div class="col-12">
              <h1>Honda test result</h1>
              <a href="{{route('safety.ncap')}}"><img src="images/ancap.png"></a><a
                href="{{ URL('/safety-asean-ncap') }}"><img
                  src="images/aseanncap.png"></a>
              <div class="btn_sty_wacthvdo"><a href="#"><i class="far fa-play-circle"></i> Wacth Video</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="row bg_initiatives">
    <div class="col-12 col-md-8 offset-md-2 col-lg-5 offset-lg-0 mapoceania">
      <img class="svg" src="images/Asia-Oceania_location_map.svg">
    </div>
    <div class="col-12 col-lg-7 wrap_detail_si">
      <h1>SAFETY INITIATIVES</h1>
      <div class="btn_select">
        <div class="select_text"><span class="flag-icon flag-icon-th"></span> THAILAND</div>
        <i class="fas fa-caret-down"></i>
        <div class="select_sub">
          <a href="#Australia"><span class="flag-icon flag-icon-au"></span> Australia</a>
          <a href="#India"><span class="flag-icon flag-icon-in"></span> India</a>
          <a href="#Indonesia"><span class="flag-icon flag-icon-id"></span> Indonesia</a>
          <a href="#Korea"><span class="flag-icon flag-icon-kr"></span> Korea</a>
          <a href="#Malaysia"><span class="flag-icon flag-icon-my"></span> Malaysia</a>
          <a href="#NewZealand"><span class="flag-icon flag-icon-nz"></span> New Zealand</a>
          <a href="#Pakistan"><span class="flag-icon flag-icon-pk"></span> Pakistan</a>
          <a href="#Philippines"><span class="flag-icon flag-icon-ph"></span> Philippines</a>
          <a href="#Taiwan"><span class="flag-icon flag-icon-tw"></span> Taiwan</a>
          <a class="active" href="#Thailand"><span class="flag-icon flag-icon-th"></span> THAILAND</a>
          <a href="#Vietnam"><span class="flag-icon flag-icon-vn"></span> Vietnam</a>
        </div>
      </div>
      <div class="wrap_nationslide loading Australia">
        <div class="mapslide">
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
        </div>
        <a class="btn_readmore" href="#"><span></span><span></span><span></span><span></span>View All <i
            class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      <div class="wrap_nationslide loading India">
        <div class="mapslide">
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
        </div>
        <a class="btn_readmore" href="#"><span></span><span></span><span></span><span></span>View All <i
            class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      <div class="wrap_nationslide loading Indonesia">
        <div class="mapslide">
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
        </div>
        <a class="btn_readmore" href="#"><span></span><span></span><span></span><span></span>View All <i
            class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      <div class="wrap_nationslide loading Korea">
        <div class="mapslide">
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
        </div>
        <a class="btn_readmore" href="#"><span></span><span></span><span></span><span></span>View All <i
            class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      <div class="wrap_nationslide loading Malaysia">
        <div class="mapslide">
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
        </div>
        <a class="btn_readmore" href="#"><span></span><span></span><span></span><span></span>View All <i
            class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      <div class="wrap_nationslide loading NewZealand">
        <div class="mapslide">
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
        </div>
        <a class="btn_readmore" href="#"><span></span><span></span><span></span><span></span>View All <i
            class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      <div class="wrap_nationslide loading Pakistan">
        <div class="mapslide">
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
        </div>
        <a class="btn_readmore" href="#"><span></span><span></span><span></span><span></span>View All <i
            class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      <div class="wrap_nationslide loading Philippines">
        <div class="mapslide">
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
        </div>
        <a class="btn_readmore" href="#"><span></span><span></span><span></span><span></span>View All <i
            class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      <div class="wrap_nationslide loading Taiwan">
        <div class="mapslide">
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
        </div>
        <a class="btn_readmore" href="#"><span></span><span></span><span></span><span></span>View All <i
            class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      <div class="wrap_nationslide loading Thailand">
        <div class="mapslide">
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
        </div>
        <a class="btn_readmore" href="#"><span></span><span></span><span></span><span></span>View All <i
            class="fas fa-long-arrow-alt-right"></i></a>
      </div>
      <div class="wrap_nationslide Vietnam">
        <div class="mapslide">
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
          <div class="item_mapslide">
            <div class="item_si">
              <figure>
                <img src="images/si01.jpg">
              </figure>
              <figcaption>
                <h2>A.P. Honda</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
            <div class="item_si">
              <figure>
                <img src="images/si02.jpg">
              </figure>
              <figcaption>
                <h2>Honda Automobile (Thailand) Co., Ltd. (HATC)</h2>
                <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1>
                <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets
                  wearing and provide animated educational video for more than 28,000...</p>
                <a href="news-detail.php">Readmore +</a>
              </figcaption>
            </div>
          </div>
        </div>
        <a class="btn_readmore" href="#"><span></span><span></span><span></span><span></span>View All <i
            class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </section>
  @include('../frontend.inc_footer')
</div>
<script>
  // 2. This code loads the IFrame Player API code asynchronously.
  var video2 = document.getElementById("video2").value;

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
      videoId: video2,
      loop: true,
      playerVars: {'autoplay': 1, 'controls': 0, 'loop': 1},
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
    if (event.data == YT.PlayerState.ENDED) {
      player.seekTo(0);
    }
  }
</script>

<script>
  $(document).ready(function () {
    $('.btn_select').click(function (event) {
      if ($(".select_sub").is(":hidden")) {
        $(".select_sub").slideDown();
      } else {
        $(".select_sub").slideUp();
      }
      event.stopPropagation();
    });
    $('.select_sub a').click(function (event) {
      var slnation = $(this).attr('href');
      var whslnation = $(this).attr('href').split('#')[1];
      $(".select_sub").slideUp();
      $('.select_sub a').removeClass('active');
      $(this).addClass('active');
      $('.btn_select .select_text').html($(this).html());
      $('.mapoceania path').removeClass('active');
      $('.mapoceania path' + slnation).addClass('active');
      $(".wrap_nationslide").slideUp();
      $('.wrap_nationslide.' + whslnation).slideDown({
        complete: function () {
          $(window).trigger('resize');
        }
      });
      event.preventDefault();
    });
    $('html').click(function (event) {
      $(".select_sub").slideUp();
    });
  });
</script>

<script>
  $(document).ready(function () {
    var ctnofs = $('.container').offset().left + 15;
    $('.wrap_detail_si').css('padding-right', ctnofs);

    $('.mapslide').on('init', function (event, slick, direction) {
      $(".dotmaster").trigger("update.dot");
      $(".wrap_nationslide").removeClass('loading');
    }).slick({
      centerMode: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      initialSlide: 2,
      autoplaySpeed: 6000,
      prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
      nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>'
    });
  });
</script>

</body>
</html>
