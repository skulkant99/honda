<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')

</head>
<body>
<div class="container-fluid environment_page overflow-container">
    @include('../frontend.inc_menu')
    <section class="row">
        <figure class="col-12 banner_inside" data-aos="fade">
            <img src="{{ asset('local/public/backend/environment_image') }}/{{$image->image}}">
        </figure>
    </section>
    <section class="row" data-aos="fade">
        <div class="container">
            <div class="row">
                <div class="col-12 evbusinessactivities_head" data-aos="fade-down" data-aos-delay="200">
                    <hgroup>
                        <h2>Honda</h2>
                        <h1>{{$header->header}}</h1>
                    </hgroup>
                    <p>{{$header->content}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 menu_evbusinessac">
                    <ul>
                        @foreach($sRowDetail as $key => $row)
                            <li><a @if($key == 0) class="active" @else class="" @endif  href="#{{$row->id}}">{{$row->header}}</a></li>
                            {{--            <li><a href="#Technology">Technology (Vehicle Technologies)</a></li>--}}
                            {{--            <li><a href="#Communication">Communication (Telecommunication Networks)</a></li>--}}
                        @endforeach
                    </ul>
                </div>
            </div>

            <!--ProductDevelopment-->
        @foreach($sRowDetail as $key => $row)

            <!--ProductDevelopment-->


                <!--ProductDevelopment-->
                <div class="row">
                    <div class="col-12 wrap_evbusinessacdetail {{$row->id}}">
                        <img
                                src="{{ URL::asset('local/public/images/Environment/BusinessActivities/Products/'.$row -> image.'')}}">
                        <h1>{{$row->header}}</h1>
                        <div id="content{{$key}}"></div>
                        <input type="hidden" id="data{{$key}}" name="data" value="{{ $row -> content}}">
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    @include('../frontend.inc_footer')
</div>
    
<script>
$(document).ready(function(){
    var content0 = document.getElementById("data0").value;
    $('#content0').html(content0);
    var content1 = document.getElementById("data1").value;
    $('#content1').html(content1);
    var content2 = document.getElementById("data2").value;
    $('#content2').html(content2);
    var content3 = document.getElementById("data3").value;
    $('#content3').html(content3);
    var content4 = document.getElementById("data4").value;
    $('#content4').html(content4);
    var content5 = document.getElementById("data5").value;
    $('#content5').html(content5);
    var content6 = document.getElementById("data6").value;
    $('#content6').html(content6);

    var filpjosl = $('.menu_evbusinessac').find('.active').position().left;
    var filpjw = $('.menu_evbusinessac').find('.active').outerWidth();
    $(".red_line").css({'width': filpjw, 'left': filpjosl});
    $(".grey_line").css({'width': filpjw, 'left': filpjosl});
    if (Modernizr.mq('(min-width: 768px)')) {
        $(".menu_evbusinessac a").mouseenter(function() {
            $('.menu_evbusinessac a').removeClass('active');
            $(this).addClass('active');
            var filpjosl = $(this).position().left;
            var filpjw = $(this).outerWidth();
            $(".grey_line").css({'width': filpjw, 'left': filpjosl});
        }).mouseleave(function() {
            $(this).removeClass('active');
            $(".grey_line").css({'width': 0});
        });
    }
    $('.menu_evbusinessac a').on('click', function (event) {
        var evbusninessaclink = $(this).attr('href').split('#')[1];
        if (Modernizr.mq('(max-width: 767px)')) {
            if ($(this).hasClass("active")) {
                $('.menu_evbusinessac a').each(function(){
                     $(this).toggleClass('show');
                });
                event.preventDefault();
            }else{
                $(".menu_evbusinessac a").removeClass("active");
                $(this).addClass("active");
                $('.menu_evbusinessac a').not(this).each(function(){
                     $(this).removeClass('show');
                });
            }
        } else {
            $('.menu_evbusinessac a').removeClass('active');
            $(this).addClass('active');
            var filpjosl = $(this).position().left;
            var filpjw = $(this).outerWidth();
            $(".red_line").css({'width': filpjw, 'left': filpjosl});
        }
        if (  $('.'+evbusninessaclink).is( ":hidden" ) ) {
            $('.wrap_evbusinessacdetail').slideUp();
            $('.'+evbusninessaclink).slideDown();
        } else {
        }
        event.preventDefault();
    });
    
    $('.menu_evbusinessac .active').trigger('click');
    
    $('.menu_environment li:nth-child(7)').addClass('active');
});
</script>

</body>
</html>