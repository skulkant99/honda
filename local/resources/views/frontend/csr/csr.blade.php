<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')
</head>
<body>
<div class="container-fluid csr_page overflow-container">
    @include('../frontend.inc_menu')
    <section class="row" data-aos="fade">
    	<div class="col-12 wrap_banner">
            <div class="flexslider" data-aos="fade">
                <ul class="slides">
                    @foreach($sRow AS $r)
                    <li>
                        <img src="{{ asset('local/public/csr_img') }}/{{$r->banner_img}}" />
                    </li>
                    @endforeach()
                    {{-- <li>
                        <img src="{{ asset('frontend/images/banner_csr.jpg') }}" />
                    </li>
                    <li>
                        <img src="{{ asset('frontend/images/banner_csr.jpg') }}" />
                    </li>
                    <li>
                        <img src="{{ asset('frontend/images/banner_csr.jpg') }}" />
                    </li> --}}
                </ul>
          	</div>
        </div>
    </section>
    <section class="row" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-12 col-md-6 fp_csritem">
                            <figure>
                                <img src="{{ asset('local/public/csr_img') }}/{{$sRow2->sc_img}}">
                            </figure>
                            <figcaption>
                                <h1><?php echo $sRow2->sc_topic ; ?></h1>{{-- Honda Social Activities --}}
                                <?php echo substr($sRow2->sc_detail, 0,150) ; ?>
                                {{-- <p class="dotmaster"></p> --}}
                                <a class="btn_readmore" href="{{ URL('/csr-social-activities') }}"><span></span><span></span><span></span><span></span>@lang('message.ReadMore') <i class="fas fa-long-arrow-alt-right"></i></a>
                            </figcaption>
                        </div>
                        <div class="col-12 col-md-6 fp_csritem">
                            <figure>
                                <img src="images/img_csrappro.jpg">
                            </figure>
                            <figcaption>
                                <h1><?php echo $sRow3->topic ; ?></h1>
                                <?php echo substr($sRow3->detail, 0,150) ; ?>
                                {{-- <p class="dotmaster"></p> --}}
                                <a class="btn_readmore" href="{{ URL('/csr-basic-approach') }}"><span></span><span></span><span></span><span></span>@lang('message.ReadMore')<i class="fas fa-long-arrow-alt-right"></i></a>
                            </figcaption>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 wrap_principle_btn">
                            <a href="#"><img src="{{ asset('frontend/images/icon_csr_principle.svg') }}"> @lang('message.Basicprinciples')</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="item_csrcircle">
                        <figure><img src="{{ asset('frontend/images/icon_csrphilosophy.svg') }}"><figcaption>Corporate Philosophy</figcaption></figure>
                    </div>
                    <div class="item_csrcircle">
                        <figure><img src="{{ asset('frontend/images/icon_csr_objective.svg') }}"><figcaption>Objective</figcaption></figure>
                    </div>
                    <div class="item_csrcircle">
                        <figure><img src="{{ asset('frontend/images/icon_csractivity.svg') }}"><figcaption>Activity Policy</figcaption></figure>
                    </div>
                    <div class="item_csrcircle">
                        <figure><img src="{{ asset('frontend/images/icon_csrfield.svg') }}"><figcaption>Field of Activities</figcaption></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="row bg_csractivities">
        <div class="col-12 col-md-8 offset-md-2 col-lg-5 offset-lg-0 mapoceania">
            <img class="svg" src="{{ asset('frontend/images/Asia-Oceania_location_map.svg') }}">
        </div>
        <div class="col-12 col-lg-7 wrap_detail_si">
            <h1>CSR NEWS</h1>
            <div class="btn_select"><div class="select_text"><span class="flag-icon flag-icon-th"></span> THAILAND</div> <i class="fas fa-caret-down"></i>
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
            <div class="wrap_nationslide Australia">
                <div class="mapslide">
                    <div class="item_mapslide">
                        @foreach($csr_aus AS $no=>$c)
                        <?php 
                        if($no <= 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                {{-- <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1> --}}
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                
                                {{-- <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets 
                                wearing and provide animated educational video for more than 28,000...</p> --}}
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="item_mapslide">
                        @foreach($csr_aus AS $no=>$c)
                        <?php 
                        if($no > 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>

                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>

            <div class="wrap_nationslide India">
                <div class="mapslide">
                    <div class="item_mapslide">
                        @foreach($csr_id AS $no=>$c)
                        <?php 
                        if($no <= 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="item_mapslide">
                        @foreach($csr_id AS $no=>$c)
                        <?php 
                        if($no > 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="wrap_nationslide Indonesia">
                <div class="mapslide">
                    <div class="item_mapslide">
                        @foreach($csr_in AS $no=>$c)
                        <?php 
                        if($no <= 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="item_mapslide">
                        @foreach($csr_in AS $no=>$c)
                        <?php 
                        if($no > 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="wrap_nationslide Korea">
                <div class="mapslide">
                    <div class="item_mapslide">
                        @foreach($csr_kr AS $no=>$c)
                        <?php 
                        if($no <= 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="item_mapslide">
                        @foreach($csr_kr AS $no=>$c)
                        <?php 
                        if($no > 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="wrap_nationslide Malaysia">
                <div class="mapslide">
                    <div class="item_mapslide">
                        @foreach($csr_ms AS $no=>$c)
                        <?php 
                        if($no <= 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="item_mapslide">
                        @foreach($csr_ms AS $no=>$c)
                        <?php 
                        if($no > 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="wrap_nationslide NewZealand">
                <div class="mapslide">
                    <div class="item_mapslide">
                       @foreach($csr_ne AS $no=>$c)
                        <?php 
                        if($no <= 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="item_mapslide">
                        @foreach($csr_ne AS $no=>$c)
                        <?php 
                        if($no > 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="wrap_nationslide Pakistan">
                <div class="mapslide">
                    <div class="item_mapslide">
                        @foreach($csr_pk AS $no=>$c)
                        <?php 
                        if($no <= 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="item_mapslide">
                        @foreach($csr_pk AS $no=>$c)
                        <?php 
                        if($no > 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="wrap_nationslide Philippines">
                <div class="mapslide">
                    <div class="item_mapslide">
                        @foreach($csr_ph AS $no=>$c)
                        <?php 
                        if($no <= 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="item_mapslide">
                        @foreach($csr_ph AS $no=>$c)
                        <?php 
                        if($no > 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="wrap_nationslide Taiwan">
                <div class="mapslide">
                    <div class="item_mapslide">
                        @foreach($csr_tw AS $no=>$c)
                        <?php 
                        if($no <= 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="item_mapslide">
                        @foreach($csr_tw AS $no=>$c)
                        <?php 
                        if($no > 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="wrap_nationslide Australia">
                <div class="mapslide">
                    <div class="item_mapslide">
                        @foreach($csr_aus AS $no=>$c)
                        <?php 
                        if($no <= 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                {{-- <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1> --}}
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                
                                {{-- <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets 
                                wearing and provide animated educational video for more than 28,000...</p> --}}
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="item_mapslide">
                        @foreach($csr_aus AS $no=>$c)
                        <?php 
                        if($no > 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="wrap_nationslide Thailand">
                <div class="mapslide">
                    <div class="item_mapslide">
                        @foreach($csr_th AS $no=>$c)
                        <?php 
                        if($no <= 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                {{-- <h1 class="dotmaster">Honda Helmet Society - Year 3 in Thailand</h1> --}}
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                
                                {{-- <p class="dotmaster">A.P. Honda continuously organize a safety campaign to promote helmets 
                                wearing and provide animated educational video for more than 28,000...</p> --}}
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                    <div class="item_mapslide">
                        @foreach($csr_th AS $no=>$c)
                        <?php 
                        if($no > 1){ 
                        ?>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('local/public/news_img') }}/{{$c->news_img}}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <?php } ?>
                        @endforeach
                    </div>
                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="wrap_nationslide Vietnam">
                <div class="mapslide">
                    <div class="item_mapslide">
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('frontend/images/si01.jpg') }}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('frontend/images/si02.jpg') }}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                    </div>
                    <div class="item_mapslide">
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('frontend/images/si01.jpg') }}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                        <div class="item_si">
                            <figure>
                                <img src="{{ asset('frontend/images/si02.jpg') }}">
                            </figure><figcaption>
                                <h2>{{$c->news_topic}}</h2>
                                <div class="dotmaster">
                                    <?php echo $c->news_cont ?>
                                </div>
                                <a href="{{ URL('/news-detail',$c->news_group) }}">Readmore +</a>
                            </figcaption>
                        </div>
                    </div>
                </div>
                <a class="btn_readmore" href="{{ URL('/csr-news') }}"><span></span><span></span><span></span><span></span>@lang('message.ViewAll') <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </section>
   @include('../frontend.inc_footer')
</div>
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
    $( '.btn_select' ).click(function (event) {
	  if (  $( ".select_sub" ).is( ":hidden" ) ) {
            $(".select_sub").slideDown();
	  } else {
          $(".select_sub").slideUp();
	  }
	  event.stopPropagation();
	});
    $( '.select_sub a' ).click(function (event) {
        var slnation = $(this).attr('href');
        var whslnation = $(this).attr('href').split('#')[1];
        $(".select_sub").slideUp();
	    $('.select_sub a').removeClass('active');
        $(this).addClass('active');
        $('.btn_select .select_text').html($(this).html());
        $('.mapoceania path').removeClass('active');
        $('.mapoceania path'+slnation).addClass('active');
        $(".wrap_nationslide").slideUp();
        $('.wrap_nationslide.'+whslnation).slideDown({
                complete: function(){
                        $('.mapslide').on('init', function(event, slick, direction){
                            $(".dotmaster").trigger("update.dot");
                        }).slick({
                          centerMode: false,
                          infinite: true,
                          slidesToShow: 1,
                          slidesToScroll: 1,
                          autoplay: true,
                          initialSlide : 2,
                          autoplaySpeed: 6000,
                          prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
                          nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>'
                        });
                    }
                });
	   event.preventDefault();
	});
    
    $( "body" ).on( "click", "path", function() {
        var slnation = $(this).attr('id');
        var whslnation = $(this).attr('id');
        if ($("."+whslnation).length !== 0) {
        $(".select_sub").slideUp();
	    $('.select_sub a').removeClass('active');
        $('.btn_select .select_text').html($('a[href="#'+whslnation+'"]').html());
        $('.mapoceania path').removeClass('active');
        $('.mapoceania path#'+slnation).addClass('active');
        $(".wrap_nationslide").slideUp();
        $('.wrap_nationslide.'+whslnation).slideDown({
            complete: function(){
                    $('.mapslide').on('init', function(event, slick, direction){
                        $(".dotmaster").trigger("update.dot");
                    }).slick({
                      centerMode: false,
                      infinite: true,
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      autoplay: true,
                      initialSlide : 2,
                      autoplaySpeed: 6000,
                      prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
                      nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>'
                    });
                }
            });
        }
	   event.preventDefault();
    });
});
</script>
    
<script>
$(document).ready(function(){
    var ctnofs = $('.container').offset().left + 15;
    $('.wrap_detail_si').css('padding-right', ctnofs );
    
    $('.mapslide').on('init', function(event, slick, direction){
        $(".dotmaster").trigger("update.dot");
    }).slick({
      centerMode: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      initialSlide : 2,
      autoplaySpeed: 6000,
      prevArrow: '<button class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
      nextArrow: '<button class="slick-next"><i class="fas fa-chevron-right"></i></button>'
    });
});    
</script>

</body>
</html>