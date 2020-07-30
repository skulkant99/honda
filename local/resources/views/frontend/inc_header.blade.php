<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="robot" content="index, follow" />
<meta name="generator" content="Brackets">
<meta name='copyright' content='Orange Technology Solution co.,ltd.'>
<meta name='designer' content='David M.'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link type="image/ico" rel="shortcut icon" href="images/favicon.ico">

<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/flexslider/flexslider.css') }}">

<link href="https://fonts.googleapis.com/css?family=Prompt:400,500,700|Roboto:400,500,700&display=swap" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>

<link rel="stylesheet" href="{{ asset('frontend/flag-icon-css-master/css/flag-icon.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/layout.css') }}">

<script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<!-- <script type="text/javascript" src="{{ asset('frontend/js/popper.min.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/slick.min.js') }}"></script>

<script type="text/javascript" defer src="{{ asset('frontend/flexslider/jquery.flexslider.js') }}"></script>

<script type="text/javascript" src="{{ asset('frontend/flexslider/js/shCore.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/flexslider/js/shBrushJScript.js') }}"></script>

<script src="https://kit.fontawesome.com/3e8060abb4.js"></script>
<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    
<script type="text/javascript" language="javascript" src="{{ asset('frontend/js/jquery.dotdotdot.min.js') }}"></script>
<script type="text/javascript" language="javascript">
    $(function() {
        $('.dotmaster').dotdotdot({
            watch: 'window'
        });
    });
</script>

<script>
$(document).ready(function(){
    $(function(){
        jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Check if the viewport is set, else we gonna set it if we can.
                if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }

                // Replace image with new SVG
                $img.replaceWith($svg);
                
                $( '.mapoceania .svg path' ).click(function (event) {
                    var pathnation = $(this).attr('id');
                    
                });

            }, 'xml');

        });
    });
    
});    
</script>