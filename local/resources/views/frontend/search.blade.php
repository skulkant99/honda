<!doctype html>
<html>
<head>
  <title>Honda Asia & Oceania | Sustainability</title>
  @include('../frontend.inc_header')

</head>
<body>

<div class="container-fluid">
@include('../frontend.inc_menu')
<!-- start page title -->
  <div class="row" data-aos="fade" >
    <div class="col-12 evbusinessactivities_head" data-aos="fade-down" data-aos-delay="200">
      <div class="container" align="center" style="max-height: 100%; padding-top: 100px; margin-bottom: 20px">
        <h4 class=" font-size-18" >SEARCH MENU URL</h4>
      </div>
    </div>
  </div>
<!-- start page title -->
  <div class="container">
    <div class="row">
      <div class="col-12" align="center" data-aos="fade-down" data-aos-delay="200">


        <input type="text" id="myInput" class="form-control float-left text-center" onkeyup="myFunction()" placeholder="Search" >
        <div class="table-responsive">
          <table id="myTable" class="table table-striped table_ncap ">
            <thead>
            <tr >
              <th >Name</th>
              <th >Action</th>
            </tr>
            </thead>
            @foreach($sRowDatas as $data)
              <tr>
                <td>{{$data->name}}</td>
                <td><a href="{{URL($data->url)}}">Go</a></td>
              </tr>
            @endforeach
          </table>
        </div>
        <div id="footer"></div>
        <input type="hidden" id="footer2" name="content" >
      </div>
      </div>
    </div>
  </div>
</div>
</div>


@include('../frontend.inc_footer')

</div>

<script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }
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
