<link rel="stylesheet" href="{{ asset('asset/frontend/css/inc_filterproduct.css') }}">

<div class="wrap_filter">
    <div class="row">
        <div class="col-6">
            <div class="topmenu">
                <div class="btn_filter btn_cart">
                    filters
                </div>
            </div>
            
            <div class="mm_overlay"></div>
            <div class="wrap_mainmenu loading">
                <div class="desc_cartopen">
                    <div class="top_cart">
                        <div class="btn_close_mm"><img src="{{ asset('asset/frontend/images/right-chevron.svg') }}" alt=""></div>
                        <div class="cartopen_head">
                            <div class="row">
                                <div class="col">
                                    <h1 class="title_cartopen">filters</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrap_itemcart content mCustomScrollbar">
                        <div class="box_filter">
                            <div class="topic_filter">Price</div>
                            <div id="range-slider">
                                <p><input type="text" id="amount" readonly style="border:0;"></p>
                                 <div class="wrap_rangeslider">
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <div class="row txt_rangeprice">
                                <div class="col">THB 600</div>
                                <div class="col text-right">THB 6000</div>
                            </div>
                        </div>
                        <div class="box_filter">
                            <div class="topic_filter">Gender</div>
                            <div class="checkbox_selecttype">
                                <input type="checkbox" id="gender1" name="gendertype">
                                <label for="gender1">For Him</label>
                                      
                               <input type="checkbox" id="gender2" name="gendertype">
                               <label for="gender2">For Her</label>

                               <input type="checkbox" id="gender3" name="gendertype">
                               <label for="gender3">Unisex</label>
                                       
                            </div>
                        </div>
                        <div class="box_filter">
                            <div class="topic_filter">Collection</div>
                            <div class="checkbox_selecttype">
                                <input type="checkbox" id="revive" name="collection">
                                <label for="revive">Revive</label>
                                      
                               <input type="checkbox" id="balance" name="collection">
                               <label for="balance">Balance</label>

                               <input type="checkbox" id="nourish" name="collection">
                               <label for="nourish">Nourish</label>
                               
                               <input type="checkbox" id="soothe" name="collection">
                               <label for="soothe">Soothe</label>
                               
                               <input type="checkbox" id="awaken" name="collection">
                               <label for="awaken">Awaken</label>
                            </div>
                            <div class="checkbox_selecttype2">
                                <input type="checkbox" id="reviveArunaYouth" name="select2">
                                <label for="reviveArunaYouth">REVIVE ArunaYouth™</label>
                                
                                <input type="checkbox" id="reviveArunaYouth2" name="select2">
                                <label for="reviveArunaYouth2">LOTUS DEFENSE™</label>
                            </div>
                        </div>
                         <div class="box_filter">
                            <div class="topic_filter">Category</div>
                            <div class="checkbox_selecttype">
                                <input type="checkbox" id="skincare" name="category">
                                <label for="skincare">Skincare</label>
                                      
                               <input type="checkbox" id="haircare" name="category">
                               <label for="haircare">Hair Care</label>

                               <input type="checkbox" id="body" name="category">
                               <label for="body">Body</label>
                                      
                               <input type="checkbox" id="home" name="category">
                               <label for="home">Home</label>
                                       
                            </div>
                        </div>
                    </div>
                    
                    <div class="row bottom_cart filteropenbox">
                        <div class="col-12">
                            <div class="wrap_btnfilter_select">
                                <div class="row">
                                    <di class="col-6">
                                        <button>apply</button>
                                    </di>
                                    <div class="col-6">
                                        <button>clear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--wrap_mainmenu-->
       </div>
       <!--filter-->
        
        <div class="col-6">
            <div class="box_btnfilter">
                <select name="" class="btn_filter">
                    <option>sort by</option>
                    <option><a href="">PAÑPURI Picks</a></option>
                    <option><a href="">New Arrival</a></option>
                    <option><a href="">Price High - Low</a></option>
                    <option><a href="">Price Low - High</a></option>
                </select>
            </div>
        </div>
        
<!--
        <div class="col-6">
            <div class="dropdown">
              <button class="btn_filter" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               sort by
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">PAÑPURI Picks</a>
                <a class="dropdown-item" href="#">New Arrival</a>
                <a class="dropdown-item" href="#">Price High - Low</a>
                <a class="dropdown-item" href="#">Price Low - High</a>
              </div>
            </div>
        </div>
-->
        
    </div>                         
</div>


<script>

$(document).ready(function(){
    
    $( '.btn_cart' ).click(function (event) {
	  if (  $( ".wrap_mainmenu" ).is( ":hidden" ) ) {
            $('.wrap_mainmenu').effect('slide', { direction: 'right', mode: 'show' }, 1000);
          $('body').addClass('mm_opened');
          $('.mm_overlay').fadeIn();
		  $(".content").mCustomScrollbar({
					theme:"minimal"
				});
	  } else {
          $('.wrap_mainmenu').effect('slide', { direction: 'right', mode: 'hide' }, 1000);
          $('body').removeClass('mm_opened');
          $('.mm_overlay').fadeOut();
	  }
	  event.stopPropagation();
	});
	
	 $( '.btn_close_mm' ).click(function (event) {
        $('.wrap_mainmenu').effect('slide', { direction: 'right', mode: 'hide' }, 1000);
        $('body').removeClass('mm_opened');
        $('.mm_overlay').fadeOut();
        event.stopPropagation();
	});
	
}); 
</script>


<script>
   
    if (Modernizr.mq('(max-width: 991px)')) {
        $('.wrap_itemcart').css('height', $(window).height() - ($('.top_cart').outerHeight() + $('.bottom_cart').outerHeight() + 100));
    }else{
        $('.wrap_itemcart').css('height', $(window).height() - ($('.top_cart').outerHeight() + $('.bottom_cart').outerHeight() + 40));
    }
    $('.wrap_mainmenu').removeClass('loading');
</script>


<script>
// Range slider - gravity forms
$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 600,
      max: 6000,
      step: 100,
      values: [ 0, 6000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "THB" + ui.values[ 0 ] + " - THB" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "THB " + $( "#slider-range" ).slider( "values", 0 ) +
      " - THB " + $( "#slider-range" ).slider( "values", 1 ) );
  } );

</script>

<script src="{{ asset('asset/frontend/scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>