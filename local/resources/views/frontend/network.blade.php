<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('frontend.inc_header')
</head>
<body>
<div class="container-fluid overflow-container">
   @include('frontend.inc_menu')
    <section class="row bg_network">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mapoceania">
                    <img class="svg" src="images/Asia-Oceania_location_map.svg">
                </div>
                <div class="col-12 col-md-6 wrap_topnetwork">
                    <h1>Honda Asia & Oceania Network</h1>
                    <h2>(Main Honda Subsidiaries and Affiliated companies)</h2>
                    <div class="wrap_select_network">
                        <h3>Country</h3>
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
                    </div><div class="wrap_select_network">
                        <h3>Category</h3>
                        <div class="btn_cate"><div class="select_text">All Category</div> <i class="fas fa-caret-down"></i>
                        <div class="select_cate">
                            <a class="active" href="#AllCategory">All Category</a>
                            <a href="#Automobile">Automobile</a>
                            <a href="#Motocycle">Motocycle</a>
                            <a href="#PowerProducts">Power Products</a>
                            <a href="#Other">Other</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-12">

                <div class="wrap_nationslide Australia">
                    <div class="item_compnay active">
                        <h1>Honda Leasing (Australia) Co., Ltd.</h1>
                        <div class="item_compnay_detail">
                            <p><strong>Activities :</strong> Financing and leasing of automobile</p>
                            <p><strong>Established :</strong> 2002/6</p>
                            <p><strong>Website :</strong> www.hondaleasing.co.th</p>
                        </div>
                    </div>
                     @foreach($sRowAustralia AS $r)

                            <div class="item_compnay">
                                <h1>{{$r->txt_company}}</h1>
                                <div class="item_compnay_detail">
                                    <p><strong>Activities :</strong>{{$r->txt_activities}}</p>
                                    <p><strong>Established :</strong> {{$r->txt_established}} </p>
                                    <p><strong>Website :</strong> {{$r->txt_website}} </p>
                                </div>
                            </div>

                     @endforeach
                </div>

                <div class="wrap_nationslide India">
                    <div class="item_compnay active">
                        <h1>Honda Leasing (India) Co., Ltd.</h1>
                        <div class="item_compnay_detail">
                            <p><strong>Activities :</strong> Financing and leasing of automobile</p>
                            <p><strong>Established :</strong> 2002/6</p>
                            <p><strong>Website :</strong> www.hondaleasing.co.th</p>
                        </div>
                    </div>
                     @foreach($sRowIndia AS $r)

                            <div class="item_compnay">
                                <h1>{{$r->txt_company}}</h1>
                                <div class="item_compnay_detail">
                                    <p><strong>Activities :</strong>{{$r->txt_activities}}</p>
                                    <p><strong>Established :</strong> {{$r->txt_established}} </p>
                                    <p><strong>Website :</strong> {{$r->txt_website}} </p>
                                </div>
                            </div>

                     @endforeach
                </div>


                <div class="wrap_nationslide Indonesia">
                    <div class="item_compnay active">
                        <h1>Honda Leasing (Indonesia) Co., Ltd.</h1>
                        <div class="item_compnay_detail">
                            <p><strong>Activities :</strong> Financing and leasing of automobile</p>
                            <p><strong>Established :</strong> 2002/6</p>
                            <p><strong>Website :</strong> www.hondaleasing.co.th</p>
                        </div>
                    </div>
                     @foreach($sRowIndonesia AS $r)

                            <div class="item_compnay">
                                <h1>{{$r->txt_company}}</h1>
                                <div class="item_compnay_detail">
                                    <p><strong>Activities :</strong>{{$r->txt_activities}}</p>
                                    <p><strong>Established :</strong> {{$r->txt_established}} </p>
                                    <p><strong>Website :</strong> {{$r->txt_website}} </p>
                                </div>
                            </div>

                     @endforeach
                </div>


                <div class="wrap_nationslide Korea">
                    <div class="item_compnay active">
                        <h1>Honda Leasing (Korea) Co., Ltd.</h1>
                        <div class="item_compnay_detail">
                            <p><strong>Activities :</strong> Financing and leasing of automobile</p>
                            <p><strong>Established :</strong> 2002/6</p>
                            <p><strong>Website :</strong> www.hondaleasing.co.th</p>
                        </div>
                    </div>
                     @foreach($sRowKorea AS $r)

                            <div class="item_compnay">
                                <h1>{{$r->txt_company}}</h1>
                                <div class="item_compnay_detail">
                                    <p><strong>Activities :</strong>{{$r->txt_activities}}</p>
                                    <p><strong>Established :</strong> {{$r->txt_established}} </p>
                                    <p><strong>Website :</strong> {{$r->txt_website}} </p>
                                </div>
                            </div>

                     @endforeach
                </div>
                     

                <div class="wrap_nationslide Malaysia">
                    <div class="item_compnay active">
                        <h1>Honda Leasing (Malaysia) Co., Ltd.</h1>
                        <div class="item_compnay_detail">
                            <p><strong>Activities :</strong> Financing and leasing of automobile</p>
                            <p><strong>Established :</strong> 2002/6</p>
                            <p><strong>Website :</strong> www.hondaleasing.co.th</p>
                        </div>
                    </div>
                     @foreach($sRowMalaysia AS $r)

                            <div class="item_compnay">
                                <h1>{{$r->txt_company}}</h1>
                                <div class="item_compnay_detail">
                                    <p><strong>Activities :</strong>{{$r->txt_activities}}</p>
                                    <p><strong>Established :</strong> {{$r->txt_established}} </p>
                                    <p><strong>Website :</strong> {{$r->txt_website}} </p>
                                </div>
                            </div>

                     @endforeach
                </div>
                               

                <div class="wrap_nationslide NewZealand">
                    <div class="item_compnay active">
                        <h1>Honda Leasing (NewZealand) Co., Ltd.</h1>
                        <div class="item_compnay_detail">
                            <p><strong>Activities :</strong> Financing and leasing of automobile</p>
                            <p><strong>Established :</strong> 2002/6</p>
                            <p><strong>Website :</strong> www.hondaleasing.co.th</p>
                        </div>
                    </div>
                     @foreach($sRowNewzealand AS $r)

                            <div class="item_compnay">
                                <h1>{{$r->txt_company}}</h1>
                                <div class="item_compnay_detail">
                                    <p><strong>Activities :</strong>{{$r->txt_activities}}</p>
                                    <p><strong>Established :</strong> {{$r->txt_established}} </p>
                                    <p><strong>Website :</strong> {{$r->txt_website}} </p>
                                </div>
                            </div>

                     @endforeach
                </div>


                <div class="wrap_nationslide Pakistan">
                    <div class="item_compnay active">
                        <h1>Honda Leasing (Pakistan) Co., Ltd.</h1>
                        <div class="item_compnay_detail">
                            <p><strong>Activities :</strong> Financing and leasing of automobile</p>
                            <p><strong>Established :</strong> 2002/6</p>
                            <p><strong>Website :</strong> www.hondaleasing.co.th</p>
                        </div>
                    </div>
                     @foreach($sRowPakistan AS $r)

                            <div class="item_compnay">
                                <h1>{{$r->txt_company}}</h1>
                                <div class="item_compnay_detail">
                                    <p><strong>Activities :</strong>{{$r->txt_activities}}</p>
                                    <p><strong>Established :</strong> {{$r->txt_established}} </p>
                                    <p><strong>Website :</strong> {{$r->txt_website}} </p>
                                </div>
                            </div>

                     @endforeach
                </div>


                <div class="wrap_nationslide Philippines">
                    <div class="item_compnay active">
                        <h1>Honda Leasing (Philippines) Co., Ltd.</h1>
                        <div class="item_compnay_detail">
                            <p><strong>Activities :</strong> Financing and leasing of automobile</p>
                            <p><strong>Established :</strong> 2002/6</p>
                            <p><strong>Website :</strong> www.hondaleasing.co.th</p>
                        </div>
                    </div>
                     @foreach($sRowPhilippines AS $r)

                            <div class="item_compnay">
                                <h1>{{$r->txt_company}}</h1>
                                <div class="item_compnay_detail">
                                    <p><strong>Activities :</strong>{{$r->txt_activities}}</p>
                                    <p><strong>Established :</strong> {{$r->txt_established}} </p>
                                    <p><strong>Website :</strong> {{$r->txt_website}} </p>
                                </div>
                            </div>

                     @endforeach
                </div>


                <div class="wrap_nationslide Taiwan">
                    <div class="item_compnay active">
                        <h1>Honda Leasing (Taiwan) Co., Ltd.</h1>
                        <div class="item_compnay_detail">
                            <p><strong>Activities :</strong> Financing and leasing of automobile</p>
                            <p><strong>Established :</strong> 2002/6</p>
                            <p><strong>Website :</strong> www.hondaleasing.co.th</p>
                        </div>
                    </div>
                     @foreach($sRowTaiwan AS $r)

                            <div class="item_compnay">
                                <h1>{{$r->txt_company}}</h1>
                                <div class="item_compnay_detail">
                                    <p><strong>Activities :</strong>{{$r->txt_activities}}</p>
                                    <p><strong>Established :</strong> {{$r->txt_established}} </p>
                                    <p><strong>Website :</strong> {{$r->txt_website}} </p>
                                </div>
                            </div>

                     @endforeach
                </div>


                <div class="wrap_nationslide Thailand">
                    <div class="item_compnay active">
                        <h1>Honda Leasing (Thailand) Co., Ltd. </h1>
                        <div class="item_compnay_detail">
                            <p><strong>Activities :</strong> Financing and leasing of automobile </p>
                            <p><strong>Established :</strong> 2002/6 </p>
                            <p><strong>Website :</strong> www.hondaleasing.co.th</p>
                        </div>
                    </div>
                     @foreach($sRowThailand AS $r)
                            <div class="item_compnay">
                                <h1>{{$r->txt_company}}</h1>
                                <div class="item_compnay_detail">
                                    <p><strong>Activities :</strong>{{$r->txt_activities}}</p>
                                    <p><strong>Established :</strong> {{$r->txt_established}} </p>
                                    <p><strong>Website :</strong> {{$r->txt_website}} </p>
                                </div>
                            </div>
                     @endforeach
                </div>


                <div class="wrap_nationslide Vietnam">
                    <div class="item_compnay active">
                        <h1>Honda Leasing (Vietnam) Co., Ltd. </h1>
                        <div class="item_compnay_detail">
                            <p><strong>Activities :</strong> Financing and leasing of automobile </p>
                            <p><strong>Established :</strong> 2002/6 </p>
                            <p><strong>Website :</strong> www.hondaleasing.co.th</p>
                        </div>
                    </div>
                     @foreach($sRowVietnam AS $r)
                            <div class="item_compnay">
                                <h1>{{$r->txt_company}}</h1>
                                <div class="item_compnay_detail">
                                    <p><strong>Activities :</strong>{{$r->txt_activities}}</p>
                                    <p><strong>Established :</strong> {{$r->txt_established}} </p>
                                    <p><strong>Website :</strong> {{$r->txt_website}} </p>
                                </div>
                            </div>
                     @endforeach
                </div>
            
            </div>
        </div>
    </section>
    @include('frontend.inc_footer')
</div>
    
<script>
$(document).ready(function(){   
    $( '.item_compnay h1' ).click(function (event) {
	  if (  $(this).siblings( ".item_compnay_detail" ).is( ":hidden" ) ) {
            $(".item_compnay_detail").slideUp();
            $('.item_compnay').removeClass('active');
            $(this).parent('.item_compnay').addClass('active');
            $(this).siblings( ".item_compnay_detail" ).slideDown();
	  } else {
	  }
	  event.stopPropagation();
	});
    
    $( '.btn_cate' ).click(function (event) {
	  if (  $( ".select_cate" ).is( ":hidden" ) ) {
            $(".select_cate").slideDown();
	  } else {
          $(".select_cate").slideUp();
	  }
	  event.stopPropagation();
	});
    $( '.select_cate a' ).click(function (event) {
        $(".select_cate").slideUp();
	    $('.select_cate a').removeClass('active');
        $(this).addClass('active');
        $('.btn_cate .select_text').html($(this).html());
	   event.preventDefault();
	}); 
    
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
        $('.wrap_nationslide.'+whslnation).slideDown();
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
            $('.wrap_nationslide.'+whslnation).slideDown();
        }
	   event.preventDefault();
    });
});
</script>
    
<script>
$(document).ready(function(){
    //$('.bg_hondasustain').css('min-height', $(window).height() - $('footer').height());
    $('.bg_network').css('padding-top', $('.topbar').height());
});
</script>

</body>
</html>