<style>
    .topbar{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        margin: 0;
        z-index: 99;
    }
    .topbar::before{
        content: "";
        background-color: rgba(255,255,255,0.9);
        position: absolute;
        z-index: 1;
        height: 67px;
        width: 100%;
        top: 12px;
        right: 0;
    }
    .wrap_logo{
        z-index: 5;
        padding-left: 0;
    }
    .wrap_logo a:not(.logosubpage){
        display: inline-block;
        background-image: url('{{ URL('images/bg_logo.svg') }}');
        background-repeat: no-repeat;
        background-size: 100% auto;
        position: relative;
        padding-bottom: 30%;
        width: 370px;
        max-width: 100%;
    }
    .wrap_logo a:not(.logosubpage) img{
        position: absolute;
        width: auto;
        height: auto;
        max-width: 80%;
        max-height: 80%;
        top: 43%;
        left: 44%;
        -ms-transform: translate( -50%, -50%);
        -webkit-transform: translate( -50%, -50%);
        transform: translate( -50%, -50%);
    }
    .wrap_logo a.logosubpage{
        display: none;
        width: 88px;
        position: absolute;
        left: 80%;
        top: 21px;
    }
    .wrap_logo a.logosubpage img{
        width: 100%;
        height: auto;
        display: block;
    }
    .wrap_menu{
        z-index: 4;
        padding-top: 22px;
        text-align: right;
        align-self: flex-start;
    }
    .wrap_menu .mainmenu{
        margin-bottom: 0;
        display: inline-block;
        padding-left: 0;
    }
    .wrap_menu .mainmenu li{
        display: inline-block;
        margin-left: 135px;
        vertical-align: middle;
    }
    .wrap_menu .mainmenu li:first-child{
        margin-left: 0;
    }
    .wrap_menu .mainmenu li a{
        display: block;
        font-weight: 700;
        color: #333333;
        font-size: 1.25rem;
        text-decoration: none;
        text-transform: uppercase;
        position: relative;
    }
    .wrap_menu .mainmenu li a .svg{
        display: inline-block;
        width: 32px;
        height: auto;
        vertical-align: middle;
        margin-right: 15px;
        margin-bottom: 4px;
    }
    .wrap_menu .mainmenu li:first-child a .svg{
        width: 46px;
    }
    .wrap_menu .mainmenu li a::before{
        content: "";
        position: absolute;
        left: 15px;
        bottom: -14px;
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 8px solid rgba(237, 39, 57, 0.9);
        display: none;
    }
    .wrap_menu .mainmenu li:first-child a::before{
        bottom: -7px;
    }
    .wrap_top{
        display: inline-block;
        margin-left: 100px;
        margin-right: 50px;
        position: relative;
        z-index: 98;
    }
    .wrap_search{
        display: inline-block;
        vertical-align: middle;
    }
    .wrap_search i{
        color: #ec1b2e;
        font-size: 1.15rem;
    }
    .lang_btn{
        display: inline-block;
        vertical-align: middle;
        margin-left: 25px;
        font-size: 1.15rem;
        color: #333333;
        font-weight: 700;
        cursor: pointer;
        position: relative;
        width: 35px;
    }
    .lang_btn i{
        font-size: 1rem;
        display: inline-block;
        vertical-align: baseline;
    }
    .btn_menu{
        display: inline-block;
        width: 26px;
        padding: 2px;
        vertical-align: middle;
        margin-left: 40px;
        text-align: right;
        line-height: 0;
        cursor: pointer;
    }
    .btn_menu span{
        display: inline-block;
        background-color: #ec1b2e;
        height: 3px;
        margin-bottom: 2px;
        margin-top: 2px;
        position: relative;
        transition: 1s all ease;
    }
    .btn_menu span:nth-child(1){
        width: 90%;
    }
    .btn_menu span:nth-child(2){
        width: 70%;
    }
    .btn_menu span:nth-child(3){
        width: 100%;
    }
    .btn_menu.active span:nth-child(1){
        transform: rotate(45deg);
        width: 100%;
        top: 4px;
    }
    .btn_menu.active span:nth-child(2){
        width: 0;
    }
    .btn_menu.active span:nth-child(3){
        transform: rotate(-45deg);
        width: 100%;
        top: -3px;
    }
    .topbar::after{
        content: "";
        position: absolute;
        z-index: 1;
        height: 50px;
        width: 100%;
        top: 79px;
        right: 0;
        background-color: rgba(237, 39, 57, 0.9);
        display: none;
    }
    .munu_subpage{
        display: none;
        justify-content: space-between;
        padding-right: 50px;
        list-style: none;
        margin-bottom: 0;
        padding-left: 60px;
        margin-top: 20px;
    }
    .munu_subpage.menu_safety{
        justify-content: space-around;
    }
    .munu_subpage li{
    }
    .munu_subpage li a{
        font-size: 1.1rem;
        color: #FFF;
        font-weight: 700;
        text-decoration: none;
        padding: 7px 0;
    }
    .munu_subpage li.active a{
        color: #f6ff00;
    }
    /*environment_page*/
    .environment_page .topbar::after{
        display: block;
    }
    .environment_page .munu_subpage.menu_environment{
        display: flex;
    }
    .environment_page .wrap_menu .mainmenu li a .svg{
        fill: #999999;
    }
    .environment_page .wrap_menu .mainmenu li a{
        color: #999;
    }
    .environment_page .wrap_menu .mainmenu li:first-child a .svg{
        fill: #ec1b2e;
    }
    .environment_page .wrap_menu .mainmenu li:first-child a{
        color: #333;
    }
    .environment_page .wrap_menu .mainmenu li:first-child a::before{
        display: block;
    }
    .environment_page .logosubpage.logoenvironment{
        display: block;
    }
    /*safety_page*/
    .safety_page .topbar::after{
        display: block;
    }
    .safety_page .munu_subpage.menu_safety{
        display: flex;
    }
    .safety_page .wrap_menu .mainmenu li a .svg{
        fill: #999999;
    }
    .safety_page .wrap_menu .mainmenu li a{
        color: #999;
    }
    .safety_page .wrap_menu .mainmenu li:nth-child(2) a .svg path{
        fill: #ec1b2e;
    }
    .safety_page .wrap_menu .mainmenu li:nth-child(2) a{
        color: #333;
    }
    .safety_page .wrap_menu .mainmenu li:nth-child(2) a::before{
        display: block;
    }
    .safety_page .logosubpage.logosafety{
        display: block;
        width: 200px;
        top: 35px;
    }
    /*csr_page*/
    .csr_page .topbar::after{
        display: block;
    }
    .csr_page .munu_subpage.menu_csr{
        display: flex;
        justify-content: space-around;
    }
    .csr_page .wrap_menu .mainmenu li a .svg{
        fill: #999999;
    }
    .csr_page .wrap_menu .mainmenu li a{
        color: #999;
    }
    .csr_page .wrap_menu .mainmenu li:nth-child(3) a .svg path{
        fill: #ec1b2e;
    }
    .csr_page .wrap_menu .mainmenu li:nth-child(3) a{
        color: #333;
    }
    .csr_page .wrap_menu .mainmenu li:nth-child(3) a::before{
        display: block;
    }
    .csr_page .logosubpage.logocsr{
        display: block;
        width: 100px;
        top: 20px;
    }
    .menubar{
        position: fixed;
        background-color: #fff;
        top: 25px;
        left: 25px;
        right: 25px;
        bottom: 25px;
        z-index: 999;
        display: none;
        padding: 50px 20px 20px 20px;
        overflow-y: auto;
    }
    .menubar ul{
        display: inline-block;
        width: 25%;
        vertical-align: top;
        padding-left: 15px;
    }
    .menubar ul li{
        list-style: none;
    }
    .menubar ul li a{
        font-size: 1.2rem;
        color: #333;
        line-height: 1.5;
        margin-bottom: 10px;
        display: inline-block;
        text-decoration: none;
    }
    .lang_sub{
        position: absolute;
        top: 100%;
        left: -10px;
        padding: 5px 0;
        background-color: rgba(255,255,255,0.8);
        display: none;
    }
    .lang_sub a{
        display: block;
        text-decoration: none;
        color: #666;
        text-align: center;
        white-space: nowrap;
        padding: 0 10px;
    }
    .lang_sub a:hover{
        background-color: #eee;
        color: #333;
    }
    .lang_sub a.active{
        display: none;
    }
    .btn_close_menubar{
        position: fixed;
        z-index: 77;
        right: 35px;
        top: 35px;
        font-size: 2rem;
        width: 42px;
        height: 42px;
        text-align: center;
        cursor: pointer;
    }
/*RESPONSIVE MENU*/
@media (max-width: 1600px){
    .wrap_logo a:not(.logosubpage){
        width: 280px;
    }
}
@media (max-width: 1439px){
    .wrap_menu .mainmenu li{
        margin-left: 60px;
    }
    .wrap_top{
        margin-right: 0;
        margin-left: 60px;
    }
    .munu_subpage{
        padding-right: 0;
    }
    .munu_subpage li a{
        font-size: 1rem;
    }
    .wrap_logo a.logosubpage {
        width: 80px;
        position: absolute;
        left: 85%;
        top: 26px;
    }
    .wrap_logo a:not(.logosubpage){
        padding-bottom: 37%;
    }
    .wrap_menu .mainmenu li a{
        font-size: 1.2rem;
    }
}
@media (max-width: 1199px){
    .wrap_logo a:not(.logosubpage) {
        width: 200px;
    }
    .wrap_logo a.logosubpage {
        width: 70px;
        left: 78%;
        top: 30px;
    }
    .munu_subpage{
        padding-left: 15px;
    }
    .munu_subpage li a{
    }
}
@media (max-width: 1199px){
    .wrap_menu .mainmenu li {
        margin-left: 30px;
    }
    .safety_page .logosubpage.logosafety {
        display: block;
        width: 140px;
        top: 39px;
    }
}
    
@media (max-width: 991px){
    .wrap_menu .mainmenu li a .svg{
        width: 26px;
    }
    .wrap_menu .mainmenu li:first-child a .svg{
        width: 30px;
    }
        .topbar::after{
        top: 60px;
        height: 45px;
    }
    .wrap_menu .mainmenu li a{
        font-size: 0.9rem;
    }
    .wrap_top{
        margin-left: 25px;
    }
    .btn_menu{
        margin-left: 15px;
    }
    .lang_btn{
        font-size: 1rem;
        margin-left: 10px;
    }
    .wrap_menu{
        padding-top: 19px;
    }
    .topbar::before{
        height: 45px;
    }
    .wrap_logo a.logosubpage{
        width: 60px;
        top: 8px;
        left: 94%;
    }
    .wrap_logo{
        padding-right: 0;
    }
    .munu_subpage{
        position: fixed;
        left: 0;
        padding-right: 15px;
        right: 0;
    }
    .munu_subpage li a{
        font-size: 0.9rem;
    }
    .safety_page .logosubpage.logosafety {
        width: 90px;
        top: 31px;
    }
    .csr_page .logosubpage.logocsr {
        display: block;
        width: 59px;
        top: 14px;
    }
}
@media (max-width: 767px){
    .wrap_menu .mainmenu{
        display: none;
    }
    .munu_subpage{
        display: none !important;
    }
    .topbar::after{
        display: none !important;
    }
    .wrap_logo a.logosubpage {
        top: 10px;
        left: 77%;
    }
    .wrap_top{
        margin-left: 0;
    }
    .wrap_menu {
        padding-top: 24px;
        padding-left: 0;
        padding-right: 10px;
    }
    .safety_page .logosubpage.logosafety {
        width: 80px;
        top: 31px;
        left: 80%;
    }
    .menubar{
        left: 5px;
        right: 5px;
        bottom: 5px;
        top: 5px;
    }
    .menubar ul{
        width: 100%;
        padding-left: 0;
        border-bottom: 1px solid #EEE;
    }
    .menubar ul li a{
        font-size: 1rem;
    }
    .btn_close_menubar{
        font-size: 1rem;
    }
    .menubar{
        padding: 20px 20px;
    }
    .btn_close_menubar{
        top: 16px;
        right: 5px;
    }
    .csr_page .logosubpage.logocsr{
        left: 83%;
    }
}
</style>
<nav class="topbar row" data-aos="fade-down">
    <div class="col-7 col-md-3 wrap_logo" data-aos="fade-down" data-aos-delay="50">
        <a href="{{ URL('/index') }}"><img src="{{ URL('/images/honda_logo.png') }}"></a>
        <a href="{{ URL('/environment') }}" class="logosubpage logoenvironment" data-aos="fade-down" data-aos-delay="100">
            <img src="{{ URL('/images/logo_environment.png') }}">
        </a>
        <a href="{{ URL('/safety') }}" class="logosubpage logosafety" data-aos="fade-down" data-aos-delay="100">
            <img src="{{ URL('/images/fp_sfe.png') }}">
        </a>
        <a href="{{ URL('/csr') }}" class="logosubpage logocsr" data-aos="fade-down" data-aos-delay="100">
            <img src="{{ URL('/images/fp_tft.png') }}">
        </a>
    </div>
    <div class="col-5 col-md-9 wrap_menu">
        <ul class="mainmenu"> 
            <li><a href="{{ URL('/environment') }}"><img class="svg" src="{{ URL('/images/icon_environment.svg') }}">@lang('message.env')</a>
            </li><li><a href="{{ URL('/safety') }}"><img class="svg" src="{{ URL('/images/icon_safety.svg') }}">@lang('message.safety')</a>
            </li><li><a href="{{ URL('/csr') }}"><img class="svg" src="{{ URL('/images/icon_csr.svg') }}">CSR</a>
            </li>
        </ul><div class="wrap_top">
            <div class="wrap_search">
            	
            	 <a href="{{URL('/search')}}"><i class="fas fa-search"  ></i></a>

            </div>
            <div class="lang_btn">
                <span>
                    @IF(Session::get('locale')=='en') EN
                    @ELSEIF(Session::get('locale')=='th') TH
                    @ELSEIF(Session::get('locale')=='vn') VN
                    @ELSEIF(Session::get('locale')=='in') ID
                    @ELSE EN
                    @ENDIF
                </span> 
                <i class="fas fa-caret-down"></i>
                <div class="lang_sub">
                    <a class="{{Session::get('locale')=='en'?'active':null}}" href="{{ URL('/lang/en') }}">EN</a>
                    <a class="{{Session::get('locale')=='th'?'active':null}}" href="{{ URL('/lang/th') }}">TH</a>
                    <a class="{{Session::get('locale')=='vn'?'active':null}}" href="{{ URL('/lang/vn') }}">VN</a>
                    <a class="{{Session::get('locale')=='in'?'active':null}}" href="{{ URL('/lang/in') }}">ID</a>
                </div>
            </div><div class="btn_menu">
                <span></span><span></span><span></span>
            </div>
        </div>
        <ul class="munu_subpage menu_environment">
            <li><a href="{{ URL('/environment') }}">@lang('message.home')</a>
            </li><li><a href="{{ URL('/environment-direction') }}">@lang('message.Direction')</a>
            </li><li><a href="{{ URL('/environment-statementandvision') }}">@lang('message.StatementAndVision')</a>
            </li><li><a href="{{ URL('/environment-tripple-zero') }}">@lang('message.TripleZeroApproach')</a>
            </li><li><a href="{{ URL('/environment-slogan') }}">@lang('message.Slogan')</a>
            </li><li><a href="{{ URL('/environment-impact') }}">@lang('message.EnviImpact')</a>
            </li><li><a href="{{ URL('/environment-business-activities') }}">@lang('message.BusinessActivities')</a></li>
        </ul>
        <ul class="munu_subpage menu_safety">
            <li><a href="{{ URL('/safety') }}">@lang('message.home')</a>
            </li><li><a href="{{ URL('/safety-slogan') }}">@lang('message.Slogan')</a>
            </li><li><a href="{{ URL('/safety-basic-approach') }}">@lang('message.BasicApproach')</a>
            </li><li><a href="{{ URL('/safety-direction') }}">@lang('message.Direction')</a>
            </li><li><a href="{{ URL('/safety-ncap') }}#aseanncap">ASEAN NCAP</a>
            </li><li><a href="{{ URL('/safety-ncap') }}#ancap">ANCAP </a></li>
        </ul>
        <ul class="munu_subpage menu_csr">
            <li><a href="{{ URL('/csr') }}">@lang('message.home')</a>
            </li><li><a href="{{ URL('/csr-social-activities') }}">@lang('message.HondaSocialActivities')</a>
            </li><li><a href="{{ URL('/csr-basic-approach') }}">@lang('message.BasicApproach')</a>
            </li><li><a href="{{ URL('/csr-basic-principles') }}">@lang('message.Basicprinciplesanddirections')</a></li>
        </ul>
    </div>
</nav>
<div class="menubar">
    <ul>
        <li><a href="{{ URL('/index') }}">@lang('message.home')</a>
        </li><li><a href="{{ URL('/environment-direction') }}">@lang('message.Download')</a>
        </li><li><a href="{{ URL('/environment-statementandvision') }}">@lang('message.Network')</a>
    </ul><ul>
        <li><a href="{{ URL('/environment') }}">@lang('message.env')</a>
        </li><li><a href="{{ URL('/environment-direction') }}">@lang('message.Direction')</a>
        </li><li><a href="{{ URL('/nvironment-statementandvision') }}">@lang('message.StatementAndVision')</a>
        </li><li><a href="{{ URL('/environment-tripple-zero') }}">@lang('message.TripleZeroApproach')</a>
        </li><li><a href="{{ URL('/environment-slogan') }}">@lang('message.Slogan')</a>
        </li><li><a href="{{ URL('/environment-impact') }}">@lang('message.EnviImpact')</a>
        </li><li><a href="{{ URL('/environment-business-activities') }}">@lang('message.BusinessActivities')</a></li>
    </ul><ul>
        <li><a href="{{ URL('/safety') }}">@lang('message.safety')</a>
        </li><li><a href="{{ URL('/safety-slogan') }}">@lang('message.Slogan')</a>
        </li><li><a href="{{ URL('/safety-basic-approach') }}">@lang('message.BasicApproach')</a>
        </li><li><a href="{{ URL('/safety-direction') }}">@lang('message.Direction')</a>
        </li><li><a href="{{ URL('/safety-ncap#aseanncap') }}">ASEAN NCAP</a>
        </li><li><a href="{{ URL('/safety-ncap') }}#ancap">ANCAP </a></li>
    </ul><ul>
        <li><a href="{{ URL('/csr') }}">CSR</a>
        </li><li><a href="{{ URL('/csr-social-activities') }}">@lang('message.HondaSocialActivities')</a>
        </li><li><a href="{{ URL('/csr-basic-approach') }}">@lang('message.BasicApproach')</a>
        </li><li><a href="{{ URL('/csr-basic-principles') }}">@lang('message.Basicprinciplesanddirections')</a></li>
    </ul>
    <div class="btn_close_menubar"><i class="fas fa-times"></i></div>
</div>

<script>
$(document).ready(function(){        
    $( '.btn_menu' ).click(function (event) {
	  if (  $( ".menubar" ).is( ":hidden" ) ) {
            //$(this).addClass("active");
            $(".menubar").fadeIn();
	  } else {
          $(this).removeClass("active");
          $(".menubar").fadeOut();
	  }
	  event.stopPropagation();
	});
    
    $( '.lang_btn' ).click(function (event) {
	  if (  $( ".lang_sub" ).is( ":hidden" ) ) {
            $(".lang_sub").slideDown();
	  } else {
          $(".lang_sub").slideUp();
	  }
	  event.stopPropagation();
	});
    
    $( '.lang_sub a' ).click(function (event) {
        $(".lang_sub").slideUp();
	    $('.lang_sub a').removeClass('active');
        $(this).addClass('active');
        $('.lang_btn span').text($(this).text());
	   event.stopPropagation();
	});
    
    $( '.btn_close_menubar' ).click(function (event) {
        $(".menubar").fadeOut();
    });
    
    $( 'html' ).click(function (event) {
        $(".lang_sub").slideUp();
    });
    
    $( '.mainmenu .hassub > a' ).click(function (event) {
	  if (  $(this).siblings( ".submenu" ).is( ":hidden" ) ) {
            $(this).siblings( ".submenu" ).slideDown();
	  } else {
          $(this).siblings('.submenu').slideUp();
	  }
	  event.preventDefault();
	});
    
});
</script>