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
    @foreach($sRowBanner as $row)
      <img src="{{ URL::asset('local/public/images/Safety/BasicApproach/Banner/'.$row -> image.'')}}"
           style="width: 100%">
    @endforeach
  </section>
  <section class="row row_safetybasicapproach">
    <div class="container">
      @foreach($sRowDetail as $row)

        <div class="row">
          <div class="col-12 col-lg-5 wrap_img_safetybasicapproach" data-aos="fade-right">
            <div>
              <img src="{{ URL::asset('local/public/images/Safety/BasicApproach/InsideDetails/Image/'.$row -> image.'')}}">
            </div>
            <div><img
                src="{{ URL::asset('local/public/images/Safety/BasicApproach/InsideDetails/Image2/'.$row -> image2.'')}}"><img
                src="{{ URL::asset('local/public/images/Safety/BasicApproach/InsideDetails/Image3/'.$row -> image3.'')}}">
            </div>
            <div><img
                src="{{ URL::asset('local/public/images/Safety/BasicApproach/InsideDetails/Image4/'.$row -> image4.'')}}"><img
                src="{{ URL::asset('local/public/images/Safety/BasicApproach/InsideDetails/Image5/'.$row -> image5.'')}}">
            </div>
          </div>
          <div class="col-12 col-lg-7 detail_safetybasicapproach" data-aos="fade-left">
            <hgroup>
              <h3>HONDA</h3>
              <h2>{{$row -> topic}}</h2>
              <h1>{{$row -> topic2}}</h1>
            </hgroup>
            <div id="content"></div>
            <input type="hidden" id="content2" name="content" value="{{ $row -> content}}">
        </div>
        </div>
      @endforeach

    </div>
  </section>
  @include('../frontend.inc_footer')

</div>

<script>
  $(document).ready(function () {
    var content = document.getElementById("content2").value;
    $('.menu_safety li:nth-child(3)').addClass('active');
    $('#content').html(content);
  });
</script>

</body>
</html>
