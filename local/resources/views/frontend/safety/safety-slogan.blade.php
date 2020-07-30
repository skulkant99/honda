<!doctype html>
<html>
<head>
<title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')


</head>
<body>
<div class="container-fluid safety_page overflow-container bg_safetyslogan">
  @include('../frontend.inc_menu')


  @foreach($sRow as $row)

  <section class="row row_safetyslogan">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 text_safetyslogan" data-aos="fade-right">
                    <h1>{{$row-> topic2}}</h1>
                    <img src="images/fp_sfe.png">
                    <p>{{$row-> content}}</p>
                </div>
                <div class="col-12 col-md-7 wrap_img_safetyslogan" data-aos="fade-down">
                    <div>
                      <img src="{{ URL::asset('local/public/images/Safety/Slogans/image/'.$row -> image.'')}} ">
                      <img src="{{ URL::asset('local/public/images/Safety/Slogans/image2/'.$row -> image2.'')}} ">
                    </div>
                    <div>
                      <img src="{{ URL::asset('local/public/images/Safety/Slogans/image3/'.$row -> image3.'')}} ">
                      <img src="{{ URL::asset('local/public/images/Safety/Slogans/image4/'.$row -> image4.'')}} ">
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endforeach

  @include('../frontend.inc_footer')


</div>

<script>
$(document).ready(function(){
    $(".bg_safetyslogan").css({'padding-top': $('.topbar').height()});
    $('.menu_safety li:nth-child(2)').addClass('active');
});
</script>

</body>
</html>
