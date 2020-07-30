<meta charset="utf-8">
<?php
	if(empty($_title)) 		$_title ='PAÑPURI | Clean Beauty & Wellness Made Effective';
	if(empty($_keywords)) 	$_keywords ='Panpuri, natural skincare Thailand, luxury skincare Thailand, organic skincare Thailand, mental wellness, aromatherapy, Thailand luxury brand, wellness, skincare, bath & body, hair care, best sellers, wellness lifestyle, beauty, personal care, Thai brand, Thai skincare brand, 100% essential oil Thailand, limited edition, Made in Thailand, luxury skincare Bangkok, luxury aromatherapy Bangkok, panpuri Penang, panpuri Ginza Six, panpuri Japan, luxury candle Thailand, Thailand souvenirs, diffusers, home ambiance, botany, Thai luxury gifts, Panpuri candle workshop, Panpuri gifts, certified organic, natural origin ingredients, results-driven, onsen, spa, Panpuri organic spa';
	if(empty($_description)) 	$_description ='Clean beauty skincare and wellness lifestyle. Certified effective and safe. Free from over 2,300 questionable ingredients with our ZeroList standard.';
?>

    <title>
        <?php echo $_title;?>
    </title>
    <base href="{{ asset('') }}">
    <meta name="keywords" content="<?php echo $_keywords;?>" />
    <meta name="description" content="<?php echo $_description;?>" />
    <meta name="robot" content="index, follow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link type="image/ico" rel="shortcut icon" href="{{ asset('asset/frontend/images/favicon.ico') }}">
    <link href="{{ asset('asset/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/frontend/css/jquery-ui.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/frontend/scrollbar-plugin/style.css') }}">
	<link rel="stylesheet" href="{{ asset('asset/frontend/scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/flexSlider/flexslider.css') }}" type="text/css" media="screen" />
    <link type="text/css" rel="stylesheet" href="{{ asset('asset/frontend/css/layout.css') }}" />


    <script src="{{ asset('asset/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/frontend/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('asset/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/frontend/js/modernizr.js') }}"></script>

    <script type="text/javascript" language="javascript" src="{{ asset('asset/frontend/dotdotdot-master/src/js/jquery.dotdotdot.js') }}"></script>
    <script type="text/javascript" language="javascript">
        $(function() {
            $('.dotmaster').dotdotdot({
                watch: 'window'
            });
        });

    </script>

    <!-- Add fancyBox main JS and CSS files -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
 	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


    <link rel="stylesheet" href="{{ asset('asset/frontend/master/css/libs/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/frontend/master/css/site.css') }}">

    <script src="{{ asset('asset/frontend/master/dist/wow.js') }}"></script>
    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();

    </script>


    <!-- FlexSlider -->
	<script defer src="{{ asset('asset/frontend/flexSlider/jquery.flexslider.js') }}"></script>
	<script type="text/javascript">
		$(window).on("load",function(){
            $('.slidetext').flexslider({
				animation: "slide",
                direction:"vertical",
				slideshowSpeed: 5000,
				animationSpeed: 1500,
				smoothHeight: true,
				slideshow: true,
				controlNav: false,
				directionNav: false,
				pauseOnHover: false
			});
		});
	</script>

