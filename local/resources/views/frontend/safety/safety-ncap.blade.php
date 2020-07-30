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
        <div class="container">
            <div class="row">
                <div class="col-12 evbusinessactivities_head" data-aos="fade-down" data-aos-delay="200">
                    <hgroup>
                        <h2>Honda</h2>
                        <h1>Third-party evaluation regarding safety</h1>
                    </hgroup>
                </div>
            </div>
         
            <div class="row rowncap" id="aseanncap">

               @foreach($sRowDetail as $row)

                <div class="col-12 col-md-6 vdo_ncap">
                    <a href="{{$row->url}}" data-fancybox><img src="{{ URL::asset('local/public/images/Safety/ASEANNCAP/SecurityTopics/Image/'.$row -> image.'')}}">
                    </a>
                </div>
                <div class="col-12 col-md-6 ncaptextdetail">
                    <h1>{{$row->topic}}</h1>
                  <p>{{ $row -> content}}</p>
                </div>

                @endforeach

                <div class="col-12">
                    <div class="table-responsive">
                      <table class="table table-striped table_ncap">
                         <thead>
                            <tr>
                                <th rowspan="2">Model</th>
                                <th rowspan="2">Year</th>
                                <th colspan="2">Evaluation Result</th>
                                <th rowspan="2">Full Report</th>
                            </tr>
                            <tr>
                                <th>AOP<sup>1</sup></th>
                                <th>COP<sup>1</sup></th>
                             </tr>
                         </thead>
                         <tbody>

                         @foreach($sRowAseanncap as $r)
                            <tr>
                            <td>{{$r->model}}</td>
                            <td>{{$r->year}}</td>
                            <td>{{$r->aop1}}</td>
                            <td>{{$r->cop1}}</td>
                            <td><a href="{{ URL::asset('local/public/backend/file-ancap/'.$r->file_report.'')}}"><i class="far fa-file-alt"></i> Download</a></td>
                         </tr>
                         @endforeach

                          
                        </tbody>
                      </table>

                    <p> <?php echo str_replace('<br />'," <br> ",$sRowSecurityncap[0]->footer) ; ?>

                    </p>

                    </div>
                  <div id="footer"></div>
                  <input type="hidden" id="footer2" name="content" value="{{ $row -> footer_en}}">
                </div>
            </div>
          


            @foreach($sRowSecurityncap as $row)

            <div class="row rowncap" id="ancap">
                <div class="col-12 col-md-6 vdo_ncap">
                    <a href="{{$row->url}}" data-fancybox><img src="{{ URL::asset('local/public/backend/securityncap/'.$row->image.'')}}">
                    </a>
                </div>
                <div class="col-12 col-md-6 ncaptextdetail">
                    <h1>{{$row->topic}}</h1>
                    <p>{{$row->content}}</p>
                </div>

            @endforeach

                <div class="col-12">
                    <div class="table-responsive">
                      <table class="table table-striped table_ncap">
                         <thead>
                            <tr>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Evaluation Result</th>
                                <th>Full Report</th>
                            </tr>

                         </thead>
                         <tbody>

                         @foreach($sRowAncap as $r)
                            <tr>
                            <td>{{$r->model}}</td>
                            <td>{{$r->year}}</td>
                            <td>{{$r->evaluation_result}}</td>
                            <td><a href="{{ URL::asset('local/public/backend/file-ancap/'.$r->file_report.'')}}"><i class="far fa-file-alt"></i> Download</a></td>
                         </tr>
                         @endforeach

                        </tbody>
                      </table>
                    </div>



                </div>
            </div>


        </div>
    </section>
      @include('../frontend.inc_footer')

</div>

<script>
$(document).ready(function(){

  var footer2 = document.getElementById("footer2").value;
  $('#footer').html(footer2);
    $(".safety_page").css({'padding-top': $('.topbar').height()});

    $( '.munu_subpage li a' ).click(function (event) {
        var idpage = $(this).attr('href').split('#')[1];
        if (  idpage == 'ancap' ) {
            $("html, body").animate({ scrollTop: $( "#"+idpage ).offset().top - $('.topbar').height() - 50 }, 1000);
            $( '.munu_subpage li' ).removeClass('active');
            $('.menu_safety li:nth-child(6)').addClass('active');
        } else{
            $("html, body").animate({ scrollTop: 0 }, 1000);
            $( '.munu_subpage li' ).removeClass('active');
            $('.menu_safety li:nth-child(5)').addClass('active');
        }
	  //event.stopPropagation();
	});

    var idpage = window.location.hash.substring(1);
    if (  idpage == 'ancap' ) {
        $("html, body").animate({ scrollTop: $( "#"+idpage ).offset().top - $('.topbar').height() - 50 }, 1000);
        $('.menu_safety li:nth-child(6)').addClass('active');
    } else{
        $("html, body").animate({ scrollTop: 0 }, 1000);
        $('.menu_safety li:nth-child(5)').addClass('active');
    }
});
</script>


</body>
</html>
